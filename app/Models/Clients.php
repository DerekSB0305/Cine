<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    //Relación uno a muchos
    public function tickets(){
        return $this->hasMany('app\Models\Tickets');
    }
}
