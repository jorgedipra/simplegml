<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuarios::all()->toArray();
        return array_reverse($usuarios);
    }

    // add Usuarios
    public function add(Request $request)
    {
        $usuarios = new Usuarios([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'document' => $request->input('document'),
            'email' => $request->input('email'),
            'country' => $request->input('country'),
            'adress' => $request->input('adress'),
            'telephone' => $request->input('telephone')
        ]);
        $usuarios->save();
 
        return response()->json('The Usuarios successfully added');
    }

    // edit Usuarios
    public function edit($id)
    {
        $usuarios = Usuarios::find($id);
        return response()->json($usuarios);
    }

     // update Usuarios
     public function update($id, Request $request)
     {
         $usuarios = Usuarios::find($id);
         $usuarios->update($request->all());
  
         return response()->json('The Usuarios successfully updated');
     }

    // delete Usuarios
    public function delete($id)
    {
        $usuarios = Usuarios::find($id);
        $usuarios->delete();
 
        return response()->json('The Usuarios successfully deleted');
    }
   
}
