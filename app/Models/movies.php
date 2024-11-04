<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

     //Relación uno a muchos (inversa)
     public function genre(){
        return $this->belongsTo('app\Models\Genres');
    }

    public function classification(){
        return $this->belongsTo('app\Models\Classifications');
    }

    //Relación uno a muchos
      //Relación uno a muchos
      public function schedules(){
        return $this->hasMany('app\Models\Schedules');
    }
}
