@extends('layouts.app')

@section('template_title')
    {{ $foto->name ?? "{{ __('Show') Foto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Foto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('fotos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $foto->foto }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $foto->usuario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
