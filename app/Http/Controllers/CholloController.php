<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chollo; // Asegúrate de que este es el nombre correcto de tu modelo

class CholloController extends Controller
{
    // Mostrar todos los chollos
    public function index()
{
    $chollos = Chollo::all();
    return view('landing', compact('chollos'));
}


    // Mostrar un chollo por ID
    public function show($id)
    {
        $chollo = Chollo::find($id);
        return view('chollo', compact('chollo'));
    }

    // Crear un nuevo chollo (aquí necesitarás un formulario)
    public function create()
    {
        return view('crearChollo');
    }

    // Almacenar un nuevo chollo en la base de datos
    public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required',
        'descripcion' => 'required',
        'url' => 'required|url',
        'categoria' => 'required',
        'puntuacion' => 'required|numeric',
        'precio' => 'required|numeric',
        'precio_descuento' => 'required|numeric',
    ]);

    $chollo = Chollo::create([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'url' => $request->url,
        'categoria' => $request->categoria,
        'puntuacion' => $request->puntuacion,
        'precio' => $request->precio,
        'precio_descuento' => $request->precio_descuento
    ]);

    return redirect('/');
}

    // Editar un chollo existente (aquí necesitarás un formulario)
    public function edit($id)
    {
        $chollo = Chollo::find($id);
        return view('editarChollo', compact('chollo'));
    }

    // Actualizar un chollo en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required|url',
            'categoria' => 'required',
            'puntuacion' => 'required|numeric',
            'precio' => 'required|numeric',
            'precio_descuento' => 'required|numeric',
        ]);

        $chollo = Chollo::find($id);
        $chollo->update($request->all());
        return redirect('/');
    }

    // Eliminar un chollo de la base de datos
    public function destroy($id)
    {
        $chollo = Chollo::find($id);
        $chollo->delete();
        return redirect('/')->with('success', 'Chollo eliminado con éxito');
    }
}

