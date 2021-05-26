<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opravy extends Model
{
    protected $table = 'opravies';

    public function opravy(){
        return $this->belongsToMany('App\Models\User');
    }
}
