<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function traertodas(){
        $peliculas = Movie::all();
        dd($peliculas);
    }

    public function traerPorId($id){
        $pelicula = Movie::find($id);
        echo $pelicula->calificacion();
    }
    public function mejoresPeliculas(){
        $peliculas = Movie::orderBy('rating','desc')->limit('10')->get();
        return $peliculas;
    }

    public function index(){
        $peliculasRecientes = Movie::orderBy('release_date','desc')->limit(10)->paginate(3);
        $mejoresPeliculas = $this->mejoresPeliculas();
        $peliculasPorId = Movie::orderBy('id','asc')->paginate(2);
        return view('home',compact('peliculasRecientes','mejoresPeliculas','peliculasPorId'));
    }



}
