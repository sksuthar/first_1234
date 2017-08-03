<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryAttribute
 */
class User extends Model {

    protected $table = 'users';
    protected $hidden = [];
    protected $fillable = [ 'name', 'email', 'password','user_role'];

    protected $rules = [
        'name' => 'required',
        'email' => 'required|confirmed|min:3',
        'password' => 'required',
        'user_role' => 'required'
    ];

    protected $customMessages = [
        'email.unique' => 'This email is already registered',
        'name.required' => 'Required',
        'password.required' => 'Required',
        'user_role.required' => 'Required'
    ];

    public function getRules() {
        return $this->rules;
    }

    public static function rules($id = 0) {
        return [
            'email' => 'required',
            'name' => 'required',
            'password' => 'required|confirmed|min:3',
            'user_role' => 'required'
        ];
    }
    public function getCustomMessages() {
        return $this->customMessages;
    }
    public function schooldata(){
        return $this->hasMany('App\Model\TempSchoolDetails','user_id');
    }
    public function admissiondata(){
        return $this->belongsTo('App\Model\AdmissionDetails','user_id');
    }
}
