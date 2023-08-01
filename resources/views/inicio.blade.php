@extends('layouts.app')

@section('content')
<h1>Inicio</h1>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
            <h4>Visualizando Inicio:</h4>
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Genero</th>
                    <th>Carrera</th>
                    <th>Foto:</th>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    @php
                        $idUsu=Session::get('loginId');
                        $idActu=$usuario->id;
                    @endphp
                    @if($idUsu!=$idActu)
                    <tr>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->correo}}</td>
                        <td>{{$usuario->genero}}</td>
                        <td>{{$usuario->carrera}}</td>
                        <td>
                            @foreach ($fotos as $foto)
                            @php
                                $idUs = $usuario->id;
                                $idFoto = $foto->usuario_id;
                            @endphp
                                @if($idFoto==$idUs)
                                        <img src="{{ asset($foto->foto)}}" width="150" height="150" class="img img-responsive">
                                        @php
                                            break;
                                        @endphp
                                @endif
                            @endforeach
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
