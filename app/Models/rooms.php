<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    //Relación uno a muchos
    public function schedules(){
        return $this->hasMany('app\Models\Schedules');
    }
}
