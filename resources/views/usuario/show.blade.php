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
                            <span class="card-title">{{ __('Show') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> {{ __('Back') }}</a>
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
                            <strong>Contraseña:</strong>
                            {{ $usuario->contraseña }}
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
                            <strong>Busqueda:</strong>
                            {{ $usuario->busqueda }}
                        </div>
                        <div class="form-group">
                            <strong>Interes:</strong>
                            {{ $usuario->interes }}
                        </div>
                        <div class="form-group">
                            <strong>Interes:</strong>
                            {{ $usuario->carrera }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
