<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class AdmissionDate extends Model
{
    protected $table = 'admission_date';
    public $timestamps = true;
    protected $hidden = [];
    protected $fillable = ['class_id','start_date','end_date','form_amount','admission_status'];

    protected $rules = [
        'class_id' => 'required',
        'start_date' => 'required',
        'end_date' => 'required'
    ];

    protected $customMessages = [
        'class_id.required' => 'Required',
        'start_date.required' => 'Required',
        'end_date.required' => 'Required'
    ];

    public function getRules() {
        return $this->rules;
    }

    public static function rules($id = 0) {
        return [
            'class_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ];
    }

    public function getCustomMessages() {
        return $this->customMessages;
    }
}