<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $table='courses';
    //
    protected $primaryKey = 'id';


    public function users(){
        return $this->belongsToMany('App\User', 'course_user','course_id','user_id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
