<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    //
      public function apprendice(){
        return $this->hasOne('App\Models\apprendice'); 

    }
}
