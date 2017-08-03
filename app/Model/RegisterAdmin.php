<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class RegisterAdmin extends Model
{
    protected $table = 'registeradmin';
    public $timestamps = true;
    protected $hidden = [];
    protected $fillable = ['email','status'];

    protected $rules = [
        'email' => 'required'
    ];

    protected $customMessages = [
        'email.required' => 'Required'
    ];

    public function getRules() {
        return $this->rules;
    }

    public static function rules($id = 0) {
        return [
            'email_id' => 'required'
        ];
    }

    public function getCustomMessages() {
        return $this->customMessages;
    }
}