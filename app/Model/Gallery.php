<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    public $timestamps = true;
    protected $hidden = [];
    protected $fillable = ['school_details_id','image_name'];

    
    public static function rules($id = 0) {
        return [
        'school_details_id' => 'required',
        'image_name' => 'required|file|min:1|max:3000'  
    ];
    }

    protected $customMessages = [
        'school_details_id.required' => 'Required',
        'image_name.required' => 'Required'
    ];

    public function getCustomMessages() {
        return $this->customMessages;
    }
}