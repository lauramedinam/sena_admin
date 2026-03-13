<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
      // Relacion Uno a Muchos 
    public function apprendices(){
        return $this->hasMany('App\Models\apprendice');
    }
     //Relacion Uno a Muchos (Inversa) con area
    public function area(){
        return $this->belongsTo('App\Models\area');
    }
    //Relacion Uno a Muchos (Inversa) con area
    public function training_center(){
        return $this->belongsTo('App\Models\training_center');
    }
    // Relacion Uno a Muchos 
    public function course_teachers(){
        return $this->hasMany('App\Models\course_teacher');
    }

}
