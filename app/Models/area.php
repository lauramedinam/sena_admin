<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    //
     //Relacion Uno a Muchos
    public function courses(){
        return $this->hasMany('App\Models\course');
    }
     //Relacion Uno a Muchos
    public function teachers(){
        return $this->hasMany('App\Models\teacher');
    }
}
