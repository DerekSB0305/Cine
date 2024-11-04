<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    //Relación uno a muchos (Inversa)
    public function client(){
        return $this->belongsTo('app\Models\Clients');
    }

    public function schedule(){
        return $this->belongsTo('app\Models\Schedules');
    }
}
