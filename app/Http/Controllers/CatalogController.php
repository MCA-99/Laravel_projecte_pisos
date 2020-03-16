<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pisos;

class CatalogController extends Controller
{
    public function getIndex()
    {
        $pisos = Pisos::all();
        return view('catalog.index', ['arrayPisos' => $pisos]);
    }

    public function getShow($id)
    {
        $pisos = Pisos::findOrFail($id);
        return view('catalog.show', ['arrayPisos' => $pisos]);
    }

    public function getCreate()
    {
        return view('catalog.create');
    }

    public function getEdit($id)
    {
        $pisos = Pisos::findOrFail($id);
        return view('catalog.edit', ['arrayPisos' => $pisos]);
    }

    public function putEdit(Request $request, $id)
    {
        $piso = Pisos::findOrFail($id);

        $piso->titulo = $request->input('titulo');
        $piso->espacio = $request->input('espacio');
        $piso->poblacion = $request->input('poblacion');
        $piso->descripcion = $request->input('descripcion');
        $piso->precio = $request->input('precio');
        $piso->foto = $request->input('foto');
        $piso->estado = 0;

        $piso->save();

        return view('catalog.edit', ['arrayPisos' => $piso]);
    }

    public function postCreate(Request $request)
    {
        $pisos = Pisos::All();
        $piso = new Pisos();

        $piso->titulo = $request->input('titulo');
        $piso->espacio = $request->input('espacio');
        $piso->poblacion = $request->input('poblacion');
        $piso->descripcion = $request->input('descripcion');
        $piso->precio = $request->input('precio');
        $piso->foto = $request->input('foto');
        $piso->estado = 0;

        $piso->save();

        return view('catalog.create', ['arrayPisos' => $pisos]);
    }
}
