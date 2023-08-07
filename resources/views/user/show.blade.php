@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? "{{ __('Show') User" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nac:</strong>
                            {{ $user->fecha_nac }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $user->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Busqueda:</strong>
                            {{ $user->busqueda }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $user->carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Interes:</strong>
                            {{ $user->interes }}
                        </div>
                        <div class="form-group">
                            <strong>Active Status:</strong>
                            {{ $user->active_status }}
                        </div>
                        <div class="form-group">
                            <strong>Avatar:</strong>
                            {{ $user->avatar }}
                        </div>
                        <div class="form-group">
                            <strong>Dark Mode:</strong>
                            {{ $user->dark_mode }}
                        </div>
                        <div class="form-group">
                            <strong>Messenger Color:</strong>
                            {{ $user->messenger_color }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
