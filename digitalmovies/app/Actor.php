<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Actor extends Model
{
    public function favorite_movie(){
        return $this->belongsTo(Movie::class,'favorite_movie_id');
    }

    public function movies(){
        return $this->belongsToMany(Movie::class,'actor_movie','actor_id','movie_id');
    }
}
