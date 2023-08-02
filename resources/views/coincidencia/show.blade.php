@extends('layouts.app')

@section('template_title')
    {{ $coincidencia->name ?? "{{ __('Show') Coincidencia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Coincidencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('coincidencias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Usuarioid1:</strong>
                            {{ $coincidencia->usuarioId1 }}
                        </div>
                        <div class="form-group">
                            <strong>Usuarioid2:</strong>
                            {{ $coincidencia->usuarioId2 }}
                        </div>
                        <div class="form-group">
                            <strong>Match1:</strong>
                            {{ $coincidencia->match1 }}
                        </div>
                        <div class="form-group">
                            <strong>Match2:</strong>
                            {{ $coincidencia->match2 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
