@extends('layouts.app4')

@section('template_title')
    Perfil
@endsection

@section('content')
@php
    $fecha = $data->fecha_nac;
    $año = strtok($fecha,'-');
    $edad = 2023-$año;
@endphp
<table class="table table-warning">
    <thead>
        <tr class="table-dark">
            <th colspan="8" scope="col">INFORMACIÓN DE USUARIO:
            </th>
        </tr>
        <tr class="table-secondary">
            <th colspan="8" scope="col">
                <div class="d-grid gap-2">
                    <a class="btn btn-dark btn-outline-warning" href="{{ route('usuarios.edit',$data->id) }}">{{ __('Editar perfil ') }}</a>
                    </a></div>
            </th>
        </tr>
      <tr class="table-secondary">
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Fecha de Nacimiento</th>
        <th scope="col">Edad</th>
        <th scope="col">Sexo</th>
        <th scope="col">Sexo (busqeuda)</th>
        <th scope="col">Carrera</th>
        <th scope="col">Carrera (busqueda)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>{{$data->name}}</th>
        <th>{{$data->email}}</th>
        <th>{{$data->fecha_nac}}</th>
        <th>{{$edad}} Años</th>
        <th>{{$data->genero}}</th>
        <th>{{$data->busqueda}}</th>
        <th>{{$data->carrera}}</th>
        <th>{{$data->interes}}</th>
      </tr>
    </tbody>
  </table>


  <table class="table table-responsive table-warning">
    <thead>
        <tr class="table-dark">
            <th colspan="7" scope="col">FOTOS DE PERFIL:
            </th>
        </tr>
        <tr class="table-secondary">
            <th colspan="3" scope="col">
                <div class="d-grid gap-2">
                    <a href="{{ route('fotos.create') }}" class="btn btn-dark btn-outline-warning"  data-placement="left">
                        {{ __('Añadir nueva foto: ') }}
                      </a>
                </div>
            </th>
            <th colspan="3" scope="col">
                <div class="d-grid gap-2">
                <a href="{{ route('usuarioFoto') }}" class="btn btn-dark btn-outline-warning"  data-placement="left">
                {{ __('Manejo de fotos: ') }}</a>
                </div>
              </a>
            </th>
        </tr>
    </thead>
  </table>
<div class="table-responsive">
  <table class="table table-warning">
    <tbody>
      <tr>
        <th>
            @php
                $contador=0;
            @endphp
            @foreach ($fotos as $foto)
            @php
                $loginId = Auth::user()->id;
                $idFoto = $foto->usuario_id;
            @endphp
                @if($idFoto==$loginId && $contador<3)
                <th>
                    <img src="{{ asset($foto->foto)}}" width="300" height="300" class="rounded mx-auto d-block">
                </th>
                @endif
                @if($idFoto==$loginId && $contador==3)
                <tr>
                    @php $contador=0; @endphp
                </tr>
                @endif
            @endforeach
        </th>
    </tr>
      <tr class="table-warning">
    </tr>
    </tbody>
  </table>
</div>

@endsection
