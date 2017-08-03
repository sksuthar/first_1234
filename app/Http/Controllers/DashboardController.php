<?php   
namespace App\Http\Controllers;
use\Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Model\SchoolDetails;
use App\Model\State;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */   
    
    public function dashboard()
    {
        $userId = Auth::user()->id;
        $schoolDetails = SchoolDetails::where('user_id',$userId)->where('full_status',1)->first();
        if($schoolDetails)
        {            
            return view('admin.dashboard'); 
        }
        else
        {
            $state = State::all();
            return view('admin.school_fill_process.index',  compact('state'));
        }                
    }
}
