@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? "{{ __('Show') Usuario" }}
@endsection

@section('content')
<div class="text-bg-warning p-3">

@include('Chatify::layouts.headLinks')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-bg-dark">
                        <div class="float-left">
                            <span class="card-title">
                                @php
                                    $id1=Auth::user()->id;
                                    $id2=$usuario->id;
                                    $match1='No';
                                @endphp

                                @foreach ($coincidencias as $coincidencia)
                                    @php
                                        $coinId1 = $coincidencia->usuarioId1;
                                        $coinId2 = $coincidencia->usuarioId2;
                                        $coinMa1 = $coincidencia->match1;
                                        $coinMa2 = $coincidencia->match2;

                                        if ($coinId1==$id1 && $coinId2==$id2 && $coinMa1=='1' && $coinMa2=='0') {
                                            $match1="1a2";
                                        }
                                        if ($coinId1==$id2 && $coinId2==$id1 && $coinMa1=='1' && $coinMa2=='0') {
                                            $match1="2a1";
                                        }

                                        if ($coinId1==$id2 && $coinId2==$id1 && $coinMa1=='1' && $coinMa2=='1') {
                                            $match1="Full";
                                        }
                                        if ($coinId1==$id1 && $coinId2==$id2 && $coinMa1=='1' && $coinMa2=='1') {
                                            $match1="Full";
                                        }
                                    @endphp
                                @endforeach
                                </span>
                        </div>

                        <div class="float-right">

                                @if ($match1=='Full')
                                <a class="btn btn-secondary btn-outline-warning" href="{{ route('inicio') }}"> {{ __('Regresar') }}</a>
                                <a class="btn btn-success btn-outline-light" href="{{ route('chatify3',$id2) }}">{{ __('Chats') }}</a>
                                @endif

                                @if ($match1=='1a2')
                                <a class="btn btn-secondary btn-outline-warning" href="{{ route('inicio') }}"> {{ __('Regresar') }}</a>
                                @endif

                                @if ($match1=='2a1')
                                @php
                                    $identificador=$coincidencia->id;
                                @endphp
                                <form method="POST" action="{{ route('coincidencias.store',$coincidencia->id) }}" role="form" enctype="multipart/form-data">
                                <a class="btn btn-secondary btn-outline-warning" href="{{ route('inicio') }}"> {{ __('Regresar') }}</a>
                                @csrf
                                <button type="submit" class="btn btn-secondary btn-outline-warning">{{ __('Match!') }}</button>
                                @include('coincidencia.form2')
                                @endif

                                @if ($match1=='No')
                                <form method="POST" action="{{ route('coincidencias.store') }}" role="form" enctype="multipart/form-data">
                                <a class="btn btn-secondary btn-outline-warning" href="{{ route('inicio') }}"> {{ __('Regresar') }}</a>
                                @csrf
                                <button type="submit" class="btn btn-secondary btn-outline-warning">{{ __('Match!') }}</button>
                                @include('coincidencia.form3')
                                @endif

                            </form>
                        </div>
                    </div>

                    <div class="card-body text-bg-secondary">
                        @php
                            $fecha = $usuario->fecha_nac;
                            $año = strtok($fecha,'-');
                            $edad = 2023-$año;
                        @endphp
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->name }}
                        </div>

                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $edad }} Años
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $usuario->genero }}
                        </div>

                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $usuario->carrera }}
                        </div>

                        <div class="form-group">
                            <strong>Fotos:</strong>
                            <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                @php
                                    $counter=0;
                                @endphp
                            @foreach ($fotos as $foto)
                                @php
                                    $usuarioId = $usuario->id;
                                    $idFoto = $foto->usuario_id;
                                @endphp
                                    @if($idFoto==$usuarioId)
                                    <div class="carousel-item active">
                                    <img src="{{ asset($foto->foto)}}" class="rounded mx-auto d-block" height="350" alt="No hay imagenes disponibles">
                                    </div>
                                    @endif
                                    @php
                                    $counter=1;
                                    @endphp
                            @endforeach
                            </div>
                            <button class="carousel-control-prev text-bg-dark" type="button" data-bs-target="#carouselExample
                            " data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next text-bg-dark" type="button" data-bs-target="#carouselExample
                            " data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection
