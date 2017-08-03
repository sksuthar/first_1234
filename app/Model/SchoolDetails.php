<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class SchoolDetails extends Model
{
    protected $table = 'school_details';
    public $timestamps = true;
    protected $hidden = [];
    protected $fillable = ['user_id','school_name','board','school_hash','school_flag','address1','address2','state','city','pincode','phone1','phone2','	phone3','website','school_email','school_logo','school_banner'];

    
    public static function rules($id = 0) {
        return [
        'user_id' => 'required',
        'school_name' => 'required',
        'board' => 'required',       
        'address1' => 'required',
        'state' => 'required',
        'city' => 'required',
        'pincode' => 'required',
        'phone1' => 'required',        
        'school_logo' =>'file|min:1|max:500',
        'school_banner' =>'file|min:1|max:3000',      
    ];
    }

    protected $customMessages = [
        'user_id.required' => 'Required',
        'school_name.required' => 'Required',
        'board.required' => 'Required',
        'address1.required' => 'Required',
        'state.required' => 'Required',
        'city.required' => 'Required',
        'pincode.required' => 'Required',
        'phone1' => 'Required'
    ];

    public function getCustomMessages() {
        return $this->customMessages;
    }

     public function getstate(){        
        return $this->belongsTo('App\Model\State','state');  
    }
}