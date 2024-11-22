<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

      //Relación uno a muchos (inversa)
      public function genre(){
         return $this->belongsTo(Genres::class);
     }

     public function classification(){
         return $this->belongsTo(Classifications::class);
     }

     //Relación uno a muchos.
       //Relación uno a muchos
       public function schedules(){
         return $this->hasMany('app\Models\Schedules');
     }

    protected $fillable = [
        'title',
        'genre_id',
        'duration',
        'classification_id',
        'synopsis',
        'image_url',
    ];
}
