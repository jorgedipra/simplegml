<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Resources\CategoriaCollection;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::all()->toArray();
        return array_reverse($categoria);
    }

    // add Categoria
    public function add(Request $request)
    {
        $categoria = new Categoria([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
        $categoria->save();
 
        return response()->json('The Categoria successfully added');
    }

    // edit categoria
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return response()->json($categoria);
    }

    // update Categoria
    public function update($id, Request $request)
    {
        $categoria = Categoria::find($id);
        $categoria->update($request->all());
 
        return response()->json('The Categoria successfully updated');
    }
 
    // delete Categoria
    public function delete($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
 
        return response()->json('The Categoria successfully deleted');
    }
}
