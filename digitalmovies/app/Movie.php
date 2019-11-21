<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function getTitle(){
        echo "El titulo es: ".$this->title;
    }

    public function calificacion(){
        if($this->rating > 8){
            return "Es muy buena!";
        }else{
            return "Ni la mires...";
        }
    }
}
