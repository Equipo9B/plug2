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
                                    $contadorNo=0;
                                    $contadorSi=0;

                                @endphp
                                @foreach ($coincidencias as $coincidencia)
                                    @php
                                        $coinId1 = $coincidencia->usuarioId1;
                                        if ($coinId1!=$id1) {
                                            $contadorNo=$contadorNo+1;
                                        }
                                        if ($coinId1==$id1) {
                                            $contadorSi=$contadorSi+1;
                                        }
                                        if ($contadorSi==0) {
                                            $match="No";
                                        }
                                        if ($contadorSi!=0) {
                                            $match="Si";
                                        }
                                    @endphp
                                @endforeach
                                </span>
                        </div>
                        <div class="float-right">
                            <form method="POST" action="{{ route('coincidencias.store') }}" role="form" enctype="multipart/form-data">
                                <a class="btn btn-primary" href="{{ route('inicio') }}"> {{ __('Regresar') }}</a>
                                @csrf
                                @if ($match=='No')
                                <button type="submit" class="btn btn-primary">{{ __('Match!') }}</button>
                                @endif
                                @include('coincidencia.form')
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
