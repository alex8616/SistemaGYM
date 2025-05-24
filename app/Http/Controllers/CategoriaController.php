<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function categoriafull(){
        $categorias = Categoria::with('actividades')->get();
        return response()->json($categorias);
    }

}
