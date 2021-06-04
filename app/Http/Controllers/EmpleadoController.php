<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;  

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleado.index')->with('empleados',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new  Empleado();
        $empleados->nombre = $request->get('nombre');
        $empleados->apellido = $request->get('apellido');
        $empleados->correo = $request->get('correo');
        $empleados->telefono = $request->get('telefono');
        $empleados->documento = $request->get('documento');
        $empleados->sueldo = $request->get('sueldo');
        $empleados->ciudad = $request->get('ciudad');

        $empleados->save();

        return redirect("/empleados");
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
        $empleado = Empleado::find($id);
        return view('empleado.edit')->with('empleado',$empleado);
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
        $empleado =  Empleado::find($id);
        $empleado->nombre = $request->get('nombre');
        $empleado->apellido = $request->get('apellido');
        $empleado->correo = $request->get('correo');
        $empleado->telefono = $request->get('telefono');
        $empleado->documento = $request->get('documento');
        $empleado->sueldo = $request->get('sueldo');
        $empleado->ciudad = $request->get('ciudad');

        $empleado->save();

        return redirect("/empleados");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado =  Empleado::find($id);
        $empleado->delete();
        return redirect("/empleados");
    }
}
