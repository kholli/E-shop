<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }
   // use HasFactory;
   public function presentPrice(){

    return number_format($this->price / 1).' Kč';

   }

   public function scopeMightAlsoLike($query){
       return $query->inRandomOrder()->take(4);
   }
}

