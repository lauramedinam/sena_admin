<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course_teacher extends Model
{
    ////Relacion Uno a Muchos (Inversa) con area
    public function course(){
        return $this->belongsTo('App\Models\course');
    }
    //Relacion Uno a Muchos (Inversa) con area
    public function teacher(){
        return $this->belongsTo('App\Models\teacher');
    }
}
