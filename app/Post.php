<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table='posts';
    //
    protected $primaryKey = 'id';



    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
