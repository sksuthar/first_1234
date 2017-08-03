<?php

namespace App\Http\Controllers\Master;
//namespace App\Http\Controllers\Master\Auth;
use \Auth;
//use Illuminate\Auth\Access\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Model\User;

class AdminController extends Controller {
    
    private $model;

    public function __construct(User $model) {
        $this->middleware('auth');
        $this->model = $model;
    }
    
    public function index()
    {
        $schoolId = Auth::user()->school_id;                           
        return view('admin.dashboard');         
    }
}