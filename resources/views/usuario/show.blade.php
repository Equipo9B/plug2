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
                                @php
                                    $id1=Session::get('loginId');
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
                            <form method="POST" action="{{ route('coincidencias.store') }}" role="form" enctype="multipart/form-data">
                                <a class="btn btn-primary" href="{{ route('inicio') }}"> {{ __('Regresar') }}</a>
                                @csrf
                                @if ($match1=='Full')
                                <h1>Ya hicieron match ambos</h1>
                                @endif

                                @if ($match1=='1a2')
                                <h1>Ya le diste match, espera respuesta</h1>
                                @endif

                                @if ($match1=='2a1')
                                <button type="submit" class="btn btn-primary">{{ __('Match!') }}</button>
                                @include('coincidencia.form2')
                                @endif

                                @if ($match1=='No')
                                <button type="submit" class="btn btn-primary">{{ __('Match!') }}</button>
                                @include('coincidencia.form3')
                                @endif

                            </form>
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
