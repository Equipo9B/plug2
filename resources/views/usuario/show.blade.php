@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? "{{ __('Show') Usuario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">
                                <h1>
                                {{ $usuario->name }}
                                </h1>
                                </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inicio') }}"> {{ __('Regresar') }}</a>
                            <a class="btn btn-primary" href="{{ route('inicio') }}"> {{ __('Match') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $usuario->name }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $usuario->correo }}
                        </div>

                        <div class="form-group">
                            <strong>Fecha Nac:</strong>
                            {{ $usuario->fecha_nac }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $usuario->genero }}
                        </div>

                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $usuario->carrera }}
                        </div>

                        <div class="form-group">
                            <strong>Fotos:</strong>
                            @foreach ($fotos as $foto)
                                @php
                                    $usuarioId = $usuario->id;
                                    $idFoto = $foto->usuario_id;
                                @endphp
                                    @if($idFoto==$usuarioId)
                                            <img src="{{ asset($foto->foto)}}" width="100" height="150" class="img img-responsive">
                                    @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
