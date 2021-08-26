<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_user extends Model
{
    public $table="course_user";
    public function user(){
    return $this->belongsTo('App\User','user_id');
}
    public function course(){
        return $this->belongsTo('App\Course','course_id');
    }
}
