@extends('layouts.app')

@section('content')
<h1>Perfil</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
            <h4>Visualizando Perfil:</h4>
            <hr>
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Genero</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Carrera</th>
                    <th>Acción:</th>
                </thead>
            </div>
                    </div>
                </div>
                <tbody>
                    <th>{{$data->name}}</th>
                    <th>{{$data->correo}}</th>
                    <th>{{$data->genero}}</th>
                    <th>{{$data->fecha_nac}}</th>
                    <th>{{$data->carrera}}</th>
                    <td><a href="{{ route('usuarioFoto') }}">Fotos de Usuario</a></td>
                </tbody>
            </table>

            <div class="card-header">
                <div style="display: flex; justify-content: space-between; align-items: center;">

                    <span id="card_title">
                        {{ __('Fotos de Usuario: ') }}
                    </span>

                     <div class="float-right">
                        <a href="{{ route('fotos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                          {{ __('Añadir nueva foto: ') }}
                        </a>
                      </div>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <tbody>
                    <td>
                    @foreach ($fotos as $foto)
                    @php
                        $loginId = Session::get('loginId');
                        $idFoto = $foto->usuario_id;
                    @endphp
                        @if($idFoto==$loginId)
                                <img src="{{ asset($foto->foto)}}" width="100" height="150" class="img img-responsive">
                        @endif
                    @endforeach
                </td>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection
