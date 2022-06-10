<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index(){
        $titulo="vista prinicipal empleados";
        $empleados =[
             ['nombre'=> 'Harrison'],
             ['nombre'=> 'Luis'],
             ['nombre'=> 'Carlos'],
             ['nombre'=> 'Maria'],
             ['nombre'=> 'Valentina'],
            ];
             
        return view('Empleados.index', compact('titulo','empleados'));

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
}
