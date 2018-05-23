<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Programa;
use App\Estudiante;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estudiantes=Estudiante::all();
        $estudiantesPrograma=Programa::find(2)->estudiantes;

        return view('/estudiantes/estudiantes',['estudiantes'=>$estudiantes,'ep'=>$estudiantesPrograma]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $programas=Programa::all();
        $estudiantesPrograma=Programa::find(2)->estudiantes;
        $desc=$programas->sortBy('numero');
        return view('estudiantes.nuevoEstudiante',['programas'=>$desc,'ep'=>$estudiantesPrograma]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        User::create([
            'name'=>$request->nombre,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        $user=User::where('email',$request->email)->first();
        $user_id=$user->id;
        Estudiante::create([
                            'matricula'=>$request->matricula,
                            'nombre'=>$request->nombre,
                            'paterno'=>$request->paterno,
                            'materno'=>$request->materno,
                            'email'=>$request->email,
                            'user_id'=>$user_id,
                            'programa_id'=>$request->programa
                            ]);

        $estudiantes=Estudiante::all();
        return view('/estudiantes/estudiantes',['estudiantes'=>$estudiantes]);
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
        //
        $estudiante=Estudiante::find($id);
        return view('estudiantes.editarEstudiante',['estudiante'=>$estudiante]);
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
        //
        $estudiante=Estudiante::find($id);
            $estudiante->nombre=$request->nombre;
            $estudiante->paterno=$request->paterno;
            $estudiante->materno=$request->materno;
            $estudiante->email=$request->email;
        $estudiante->save();

        $estudiantes=Estudiante::all();
        return view('/estudiantes/estudiantes',['estudiantes'=>$estudiantes]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
