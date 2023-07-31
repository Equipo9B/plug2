@extends('layouts.app')

@section('content')
<h1>Inicio</h1>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
            <h4>Bienvenido a la página de Inicio</h4>
            <hr>
            <table>
                <thead>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Acción:</th>
                </thead>
                <tbody>
                    <th>{{$data->name}}</th>
                    <th>{{$data->correo}}</th>
                    <th>{{$data->contraseña}}</th>
                    <td><a href="{{ route('usuarioFoto') }}">Fotos de Usuario</a></td>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
