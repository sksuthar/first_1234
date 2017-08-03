<?php

namespace App\Http\Controllers\Master;
//namespace App\Http\Controllers\Master\Auth;
use \Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Model\User;
use App\Model\RegisterAdmin;

class AuthController extends Controller {

    private $model;

    public function __construct(User $model) {
        $this->model = $model;
    }
    
    public function store(Request $request) {
        $data = $request->all();
        $v = \Validator::make($data, User::rules(), $this->model->getCustomMessages());

        if ($v->fails()) {
            return redirect()->to($this->getRedirectUrl())
                ->withInput($request->input())
                ->withErrors($v->messages());
        } else {
           $email = $data['email'];
           $user_type = $data['user_role']; 
        
            if(strcmp($user_type,getenv('ADMIN_CODE'))==0)
            {   
                $result = \App\Model\RegisterAdmin::where('email',$email)->first();

                if($result){                 
                       \App\User::create([
                          'name' => $data['name'],
                          'email' => $data['email'],
                          'password' => bcrypt($data['password']),
                          'user_role' => 'adm0002',
                      ]); 

                    Session::flash('message', 'login with id and pass');
                    return redirect('login');
                }else{            
                Session::flash('message', 'Sorry your email id not registed with us');
                return redirect('register');                 
                }                        
            }else{                             
                   \App\User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'user_role' => 'stu0002',
                 ]);   
                  Session::flash('message', 'Please login with your credentials.');
                  return redirect('login');       
            }  
        }
    }
}
