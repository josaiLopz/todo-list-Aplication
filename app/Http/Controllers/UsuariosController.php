<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        
    }
    
    public function index()
    // public function index(Request $request)
    {
        //
        // $texto=trim($request->get('texto'));
        // $usuarios=DB::table('usuarios');
            // ->select('id','nombre','nombre_usuario','descripcion','fecha_inicio','fecha_vencimiento')
            // ->where('nombre','LIKE','%'.$texto.'%')
            // ->orWhere('nombre_usuario','LIKE','%'.$texto.'%')
            // ->orderBy('apellidos','asc')
            // ->paginate(10);
        $usuarios=Usuarios::all();
        return view('index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        $usuario= new Usuarios;
        $usuario->nombre=$request->input('nombre');
        $usuario->descripcion=$request->input('descripcion');
        $usuario->nombre_usuario=$request->input('nombre_usuario');
        $usuario->fecha_inicio=$request->input('fecha_inicio');
        $usuario->fecha_vencimiento=$request->input('fecha_vencimiento');
        $usuario->save();
        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario=Usuarios::findOrFail($id);
        // return $usuario;
        return view('edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $usuario=Usuarios::findOrFail($id);
        $usuario->nombre=$request->input('nombre');
        $usuario->descripcion=$request->input('descripcion');
        $usuario->nombre_usuario=$request->input('nombre_usuario');
        $usuario->fecha_inicio=$request->input('fecha_inicio');
        $usuario->fecha_vencimiento=$request->input('fecha_vencimiento');
        $usuario->save();
        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario=Usuarios::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}
