<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado\Cargo;
use App\Models\Empleado\Empleado;

class EmpleadosController extends Controller
{
    public function index(){
        $titulo = "Vista principal de empleados";
        $empleados = Empleado::paginate();
        $cargos = Cargo::all();
        return view('Empleados.index', compact('titulo', 'empleados', 'cargos'));

    }
    public function crear(){
        $titulo = "Vista crear de empleados";
        return view('Empleados.crear', compact('titulo'));
    }
    public function mostrar(){
        $titulo = "Vista mostrar de empleados";
        return view('Empleados.mostrar', compact('titulo'));
    }
    
    public function editar(){
        $titulo = "Vista crear de empleados";
        return view('Empleados.editar', compact('titulo'));
    }

    public function guardar(){
        return request();
    }
}

