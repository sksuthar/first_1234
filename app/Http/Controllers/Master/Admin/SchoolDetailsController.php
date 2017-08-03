<?php
namespace App\Http\Controllers\Master\Admin;
use \Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Model\User;
use App\Model\SchoolDetails;
use App\Model\State;
use App\Model\Gallery;

class SchoolDetailsController extends Controller {
    
    private $model;

    public function __construct(SchoolDetails $model) {
        $this->middleware('auth');
        $this->model = $model;
    }
    
    public function index()
    {
        $schoolId = Auth::user()->school_id;
        $state = State::all();
        $gallery = Gallery::all();
        $schoolData = SchoolDetails::find($schoolId);        
        return view('admin.school_details.index',  compact('state','gallery','schoolData'));
    }

    public function store(Request $request)
    {
        $post = $request->all();               
        $validater = \Validator::make($post, SchoolDetails::rules(), $this->model->getCustomMessages());
        if ($validater->fails()) {
            return redirect()->to($this->getRedirectUrl())
                ->withInput($request->input())
                ->withErrors($validater->messages());
        }else{
            
            $userId = Auth::user()->id;
            $userEmail = Auth::user()->email;

            $schoolDataCheck = SchoolDetails::where('user_id',$userId)->first();
            
            $userDataCheck = User::where('id',$post['user_id'])->where('email',$userEmail)->first();

            if(empty($schoolDataCheck) && !empty($userDataCheck))
            {
                if(Input::file('school_logo')){               
                    $image_url = Input::file('school_logo');
                    $destinationPath = 'resources/assets/images/';
                    $post['school_logo'] = $image_url->getClientOriginalName();
                    $filename = substr(number_format(time() * rand(), 0, '', ''), 0, 15).".jpg";
                    $image_url->move($destinationPath, $filename);
                    $post['school_logo'] = 'resources/assets/images/' . $filename;
                }else{
                    $post['school_logo'] = '';
                }

                if(Input::file('school_banner')){               
                    $image_url = Input::file('school_banner');
                    $destinationPath = 'resources/assets/images/';
                    $post['school_banner'] = $image_url->getClientOriginalName();
                    $filename = substr(number_format(time() * rand(), 0, '', ''), 0, 15).".jpg";
                    $image_url->move($destinationPath, $filename);
                    $post['school_banner'] = 'resources/assets/images/' . $filename;
                }else{
                    $post['school_banner'] = '';
                }
                
                $post['user_id'] = $userId;
                
                $schoolData = SchoolDetails::create($post);
                
                $schoolHash = bcrypt($schoolData->id);
                $schoolReplaceString = str_replace("/","2",$schoolHash);

                $schoolData->school_hash = $schoolReplaceString;
                $schoolData->school_flag = rand(10,1000000);
                $schoolData->full_status = 1;
                $schoolData->save();

                $userUpdate = User::find($userId);
                $userUpdate->school_id = $schoolData->id;
                $userUpdate->save();
                
                Session::flash('success_message', 'Successfully save school details.');
                return redirect('/home');
            }
            else
            {
                Session::flash('success_message', 'Something went wrong');                    
                return redirect($this->getRedirectUrl());
            }
        }
    }

    public function upload_gallery(Request $request)
    {
        $post = $request->all();    
        $post['school_details_id'] = Auth::user()->school_id;
        $validater = \Validator::make($post, Gallery::rules(), $this->model->getCustomMessages());
        if ($validater->fails()) {
            return redirect()->to($this->getRedirectUrl())
                ->withInput($request->input())
                ->withErrors($validater->messages());
        }else{
            $image_url = Input::file('image_name');
            $destinationPath = 'resources/assets/images/gallery/';
            $post['image_name'] = $image_url->getClientOriginalName();
            $filename = substr(number_format(time() * rand(), 0, '', ''), 0, 15).".jpg";
            $image_url->move($destinationPath, $filename);
            $post['image_name'] = 'resources/assets/images/gallery/' . $filename;
            

            $schoolData = Gallery::create($post);
            Session::flash('success_message', 'Gallery image upload successfully');                    
            return redirect($this->getRedirectUrl());
        }
    }    
}