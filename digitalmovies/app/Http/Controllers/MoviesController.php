<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Movie::all();

        return view('movies.index',compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            "title" => "required|min:2",
            "awards" => "numeric|required|min:0",
            "rating" => "numeric|required|min:0|max:10"
        ];
        $mensajes = [
            "title.required" => "El titulo es obligatorio",
            "awards.required" => "Los premios son obligatorios",
            "rating.required" => "El rating es obligatorio",
            "title.min" => "Debe tener al menos 2 caracteres",
            "awards.min" => "No puede tener menos de cero",
            "rating.min" => "Debe ser entre 0 y 10",
            "rating.max" => "Debe ser entre 0 y 10",
            "numeric" => "Debe ser un numero"
        ];
        $this->validate($request,$reglas,$mensajes);

        $nuevaPelicula = new Movie;
        $nuevaPelicula->title = $request->title;
        $nuevaPelicula->awards = $request->awards;
        $nuevaPelicula->rating = $request->rating;
        $nuevaPelicula->release_date = "1900-01-01 00:00:00";
        $nuevaPelicula->save();

        return redirect("/movies/list");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula = Movie::find($id);

        return view('movies.edit',compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reglas = [
            "title" => "required|min:2",
            "awards" => "numeric|required|min:0",
            "rating" => "numeric|required|min:0|max:10"
        ];
        $mensajes = [
            "title.required" => "El titulo es obligatorio",
            "awards.required" => "Los premios son obligatorios",
            "rating.required" => "El rating es obligatorio",
            "title.min" => "Debe tener al menos 2 caracteres",
            "awards.min" => "No puede tener menos de cero",
            "rating.min" => "Debe ser entre 0 y 10",
            "rating.max" => "Debe ser entre 0 y 10",
            "numeric" => "Debe ser un numero"
        ];
        $this->validate($request,$reglas,$mensajes);

        $pelicula = Movie::find($id);
        $pelicula->title = $request->title;
        $pelicula->awards = $request->awards;
        $pelicula->rating = $request->rating;
        $pelicula->save();

        return redirect("/movies/list");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = Movie::find($id);
        $pelicula->delete();

        return redirect('/movies/list');
    }   
}
