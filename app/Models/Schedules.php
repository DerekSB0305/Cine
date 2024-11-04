<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;

    //Relación uno a muchos (Inversa)
    public function movie(){
        return $this->belongsTo('app\Models\Movies');
    }

    public function room(){
        return $this->belongsTo('app\Models\Rooms');
    }

    //Relación uno a muchos
    public function tickets(){
        return $this->hasMany('app\Models\Tickets');
    }
}
