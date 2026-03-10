<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class apprendice extends Model
{
    //
     public function computer()
    {
       return $this->belongsTo('App\Models\computer');
    }
    //Relacion Uno a Muchos (Inversa) con course
    public function course(){
        return $this->belongsTo('App\Models\course');
    }
}
