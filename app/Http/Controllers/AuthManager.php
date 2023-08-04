<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Coincidencia;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function loginUs(){
        return view('auth.login');
    }

    function ingresoVista(){
        return view('ingreso');
    }

    function registroVista(){
        return view('registro');
    }

    function ingresoPost(Request $request){
        $request->validate([
            'correo'=>'required',
            'contraseña'=>'required'
        ]);

        $usuario = Usuario::where('correo','=',$request->correo)->first();
        if($usuario){
            if(Hash::check($request->contraseña, $usuario->contraseña)){
                $request->session()->put('loginId',$usuario->id);
                return redirect()->intended(route('inicio'))->with("exito","Ingreso correcto");
            }
            else{
                return back()->with('error', 'Contraseña incorrecta');
            }
        }
        else{
            return back()->with('error','Correo no registrado');
        }
    }

    function registroPost(Request $request){
        $request->validate([
            'name'=>'required',
            'correo'=>'required',
            'contraseña'=>'required',
            'fecha_nac'=>'required',
            'genero'=>'required',
            'busqueda'=>'required',
            'carrera'=>'required',
            'interes'=>'required',
        ]);

        $data['name'] = $request->name;
        $data['correo'] = $request->correo;
        $data['contraseña'] = Hash::make($request->contraseña);
        $data['fecha_nac'] = $request->fecha_nac;
        $data['genero'] = $request->genero;
        $data['busqueda'] = $request->busqueda;
        $data['carrera'] = $request->carrera;
        $data['interes'] = $request->interes;


        $usuario = Usuario::create($data);
        if(!$usuario){
            return redirect()->intended(route('registroVista'))->with("error","Datos invalidos");
        }
        return redirect()->intended(route('ingresoVista'))->with("exito","Cuenta creada");
    }

    public function inicio(){
        $data = array();
        $usuarios = array();
        $fotos = array();
            $data = Usuario::where('id','=','6')->first();
            $usuarios = User::get();
            $fotos = Foto::get();
        return view('inicio',compact('data','fotos','usuarios'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function inicio2($id){
        $data = array();
        $usuarios = array();
        $fotos = array();
            $data = User::where('id','=',$id)->first();
            $usuarios = User::get();
            $fotos = Foto::get();
        return view('perfil',compact('data','fotos','usuarios'));
    }

    public function perfil(){
        $data = array();
        $fotos = array();
        $id = Auth::user()->id;
            $data = User::where('id','=',$id)->first();
            $fotos = Foto::get();
        return view('perfil',compact('data','fotos'));
    }

    function salir(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect()->intended(route('login'));
        }
    }
}
