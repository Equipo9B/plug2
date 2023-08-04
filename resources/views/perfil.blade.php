@extends('layouts.app')

@section('template_title')
    Perfil
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
            <div class="card-header">
                <div style="display: flex; justify-content: space-between; align-items: center;">

                    <span id="card_title">
                        {{ __('Perfil') }}
                    </span>

                     <div class="float-right">
                        <a class="btn btn-sm btn-success" href="{{ route('usuarios.edit',$data->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar perfil ') }}</a>
                        </a>
                      </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
            <table class="table table-striped table-hover">

                <thead class="thead">
                    <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Genero</th>
                    <th>Busqueda</th>
                    <th>Carrera (De usuario)</th>
                    <th>Carrera (Interes)</th>
                </tr>
                </thead>
                <tbody>
                    <th>{{$data->id}}</th>
                    <th>{{$data->name}}</th>
                    <th>{{$data->email}}</th>
                    <th>{{$data->fecha_nac}}</th>
                    <th>{{$data->genero}}</th>
                    <th>{{$data->busqueda}}</th>
                    <th>{{$data->carrera}}</th>
                    <th>{{$data->interes}}</th>
                </tbody>
            </table>
                </div>
            </div>

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
                        $loginId = Auth::user()->id;
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
@endsection
