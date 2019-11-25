<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "name" => "required",
            "email" => "required|unique:users",
            "password" => "required|same:confirm_password"
        ],[
            "required" => "El campo es obligatorio."
        ]);

        $nuevoUsuario = new User;
        $nuevoUsuario->name = $request->name;
        $nuevoUsuario->email = $request->email;
        $nuevoUsuario->password = password_hash($request->password,PASSWORD_DEFAULT);
    
        $nuevoUsuario->save();

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
        $usuario = User::find($id);
        
        return view('users.edit',compact('usuario'));
        //return view('users.edit')->with($usuario)->with($campo);
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
        $this->validate($request,[
            "name" => "required|min:2|alpha"
        ],[
            "required" => "Ponele un nombre por favor",
            "min" => "Al menos dos letras",
            "string" => "que sea texto"
        ]);

        $usuarioAEditar = User::find($id);
        $usuarioAEditar->name = $request->name;
        $usuarioAEditar->save();

        return redirect('/movies/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarioAEliminar = User::find($id);
        $usuarioAEliminar->delete();

        return redirect("/movies/list");
    }
}
