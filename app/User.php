<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table='users';
    //
    protected $primaryKey = 'id';


    public function courses(){
        return $this->belongsToMany('App\Course', 'course_user','user_id','course_id');
    }
    public function course(){
        return $this->hasMany('App\Course');
    }
}
