<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function mostrarPersonas()
    {
        $personas = [
            new Persona("Héctor", 25, "Estudiante"),
            new Persona("María", 30, "Docente"),
            new Persona("Juan", 35, "Coordinador")
        ];


        return view('personas', compact('personas'));
    }
}
