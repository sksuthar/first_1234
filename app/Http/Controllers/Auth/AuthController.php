<?php

namespace App\Http\Controllers\Auth;

use App\Model\TempAdmin;
use App\Model\User;
use App\Model\TempSchoolDetails;
use DB;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:3',
            'user_role' =>'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $email = $data['email'];
        $user_type = $data['user_role']; 
        
        if(strcmp($user_type,getenv('ADMIN_CODE'))==0)
        {   
            echo 'compare yes';
            $result = \App\Model\TempAdmin::where('email',$email)->first();

            if($result){                 
                  return \App\User::create([
                      'name' => $data['name'],
                      'email' => $data['email'],
                      'password' => bcrypt($data['password']),
                      'user_role' => 'adm0002',
                  ]);                  
            }else{            
                
                //  Session::flash('message', 'Soory Your email id not registered with us. Please contact with us.');
                  return redirect('wrong');
            }                        
        }else{            
           
              return \App\User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'user_role' => 'stu0002',
             ]);           
        }
        //$school_name = \App\Model\TempSchoolDetails::where('email_id',$user_email_id)->first();
//        $query = \App\Model\TempAdmin::where('email', $email)->first();
//        
//        
//        if($query['email']!=''&& $query['email'])
//        {
//            return \App\User::create([
//                'name' => $data['name'],
//                'email' => $data['email'],
//                'password' => bcrypt($data['password']),
//                'user_role' => 'adm0002',
//            ]);
//        } else{
//            return \App\User::create([
//                'name' => $data['name'],
//                'email' => $data['email'],
//                'password' => bcrypt($data['password']),
//                'user_role' => 'stu0002',
//            ]);
//        }
    }
}
