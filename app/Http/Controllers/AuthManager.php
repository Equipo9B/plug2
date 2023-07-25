<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
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

        //$credentials = $request->only('correo','contraseña');
        //if(Auth::attempt($credentials)){
        //    return redirect()->intended(route('home'))->with("exito","Credenciales correctas");
        //}
        //return redirect()->intended(route('ingresoVista'))->with("error","Credenciales incorrectas");
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
        ]);

        $data['name'] = $request->name;
        $data['correo'] = $request->correo;
        $data['contraseña'] = Hash::make($request->contraseña);
        $data['fecha_nac'] = $request->fecha_nac;
        $data['genero'] = $request->genero;
        $data['busqueda'] = $request->busqueda;
        $data['carrera'] = $request->carrera;

        $usuario = Usuario::create($data);
        if(!$usuario){
            return redirect()->intended(route('registroVista'))->with("error","Datos invalidos");
        }
        return redirect()->intended(route('ingresoVista'))->with("exito","Cuenta creada");
    }

    public function inicio(){
        $data = array();
        if(Session::has('loginId')){
            $data = Usuario::where('id','=',Session::get('loginId'))->first();
        }
        return view('inicio',compact('data'));
    }

    function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect()->intended(route('ingresoVista'));
        }
    }
}
