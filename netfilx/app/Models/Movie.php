<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Picture;

class Movie extends Model
{
    use HasFactory;
    protected $fillable= ['movie_name','movie_description','movie_gener'];


    public function images(){
       return $this->hasMany(Picture::class);
    }
}
