<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'state';
    public $timestamps = true;
    protected $hidden = [];
    protected $fillable = ['state'];
}