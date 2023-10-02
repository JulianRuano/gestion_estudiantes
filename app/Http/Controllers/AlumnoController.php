<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Nivel;
use Illuminate\Http\Request;

//php artisan make:controller AlumnoController --model=Alumno --resource

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $alumnos = Alumno::paginate(2);
        return view('alumnos.index',['alumnos'=>$alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Del modelo Nivel, obtén todos los registros
        return view('alumnos.create',['niveles'=>Nivel::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricula'=>'required|unique:alumnos|max:10',
            'nombre'=>'required|max:50',
            'fecha'=>'required|date',
            'telefono'=>'required|max:20',
            'email'=>'required|max:100',
            'nivel'=>'required'
        ]);

        $alumno = new Alumno();
        $alumno->matricula = $request->input('matricula');
        $alumno->nombre = $request->input('nombre');
        $alumno->fecha_nacimiento = $request->input('fecha');
        $alumno->telefono = $request->input('telefono');
        $alumno->email = $request->input('email');
        $alumno->nivel_id = $request->input('nivel');
        $alumno->save();

        return redirect()->route('alumnos.index')->with('status','Alumno creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            // El alumno no se encontró, muestra la página de error 404 personalizada
            return response()->view('errors.404', [], 404);
        }

        return view('alumnos.edit', ['alumno' => $alumno, 'niveles' => Nivel::all()]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'matricula'=>'required|max:10|unique:alumnos,matricula,'.$id,
            'nombre'=>'required|max:50',
            'fecha'=>'required|date',
            'telefono'=>'required|max:20',
            'email'=>'max:100',
            'nivel'=>'required'
        ]);

        $alumno = Alumno::find($id);
        $alumno->matricula = $request->input('matricula');
        $alumno->nombre = $request->input('nombre');
        $alumno->fecha_nacimiento = $request->input('fecha');
        $alumno->telefono = $request->input('telefono');
        $alumno->email = $request->input('email');
        $alumno->nivel_id = $request->input('nivel');
        $alumno->save();

        return redirect()->route('alumnos.index')->with('status','Alumno ('.$alumno->nombre .') Editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('status','Alumno ('.$alumno->nombre .') Eliminado exitosamente');
    }
}
