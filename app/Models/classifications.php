<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classifications extends Model
{
    use HasFactory;
    
    // Relacion uno a muchos
    public function movies(){
        return $this->hasMany('app\Models\Movies');
}
}
