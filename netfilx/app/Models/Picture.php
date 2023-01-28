<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Picture extends Model
{
    use HasFactory;

    public function mov (){
       return $this->belongsTo(Movie::class);
    }
}
