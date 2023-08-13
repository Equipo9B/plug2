@extends('layouts.app3')

@section('content')
<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px">

                    @foreach ($usuarios as $usuario)
                    @php
                        $idUsu=Auth::user()->id;
                        $idActu=$usuario->id;

                        $usSex=$data->genero;
                        if ($usSex!='Hombre' && $usSex!='Mujer') {
                            $usSex='Todos';
                        }
                        $usSex2=$usuario->genero;
                        if ($usSex2!='Hombre' && $usSex2!='Mujer') {
                            $usSex2='Todos';
                        }

                        $prefSex=$data->busqueda;
                        $prefSex2=$usuario->busqueda;
                        if($prefSex2=='Todos'){
                            $prefSex2=$usSex;
                        }

                        $prefCarr=$data->interes;

                        $prefCarr2=$usuario->interes;

                        $usCarr=$data->carrera;
                        $usCarr2=$usuario->carrera;
                        if ($prefCarr=='Todas') {
                            $usCarr2='Todas';
                        }
                        if ($prefCarr2=='Todas') {
                            $usCarr='Todas';
                        }
                    @endphp
                    @switch($prefSex)
                        @case('Hombre')
                            @if($usSex==$prefSex2 && $usSex2=='Hombre' && $prefCarr==$usCarr2 && $prefCarr2==$usCarr && $idUsu!=$idActu)
                                    @foreach ($fotos as $foto)
                                @php
                                    $idUs = $usuario->id;
                                    $idFoto = $foto->usuario_id;
                                @endphp
                                    @if($idFoto==$idUs)
                                            @php
                                            break;
                                            @endphp
                                    @endif
                                    @endforeach
                                    <div class="card">
                                        <div class="col-8">
                                        <div class="p-2">
                                            <img src="{{ asset($foto->foto)}}" class="card-img-top">
                                        </div> </div>
                                        <div class="card-body">
                                        @php
                                            $fecha = $usuario->fecha_nac;
                                            $año = strtok($fecha,'-');
                                            $edad = 2023-$año;
                                        @endphp
                                          <h5 class="card-title">{{ $usuario->name }} {{ $edad }} Años</h5>
                                          {{ $usuario->carrera }}
                                          <p class="card-text">{{ $usuario->genero }}</p>
                                          <div class="d-grid gap-2">
                                            <a class="btn btn-sm btn-dark btn-outline-warning" href="{{ route('usuarios.show',$usuario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Perfil') }}</a>
                                            </div>
                                            </div>
                                      </div>
                                    <hr class="border border-dark border-10 opacity-100">
                            @endif
                            @break
                        @case('Mujer')
                        @if($usSex==$prefSex2 && $usSex2=='Mujer' && $prefCarr==$usCarr2 && $prefCarr2==$usCarr && $idUsu!=$idActu)
                                @foreach ($fotos as $foto)
                                @php
                                    $idUs = $usuario->id;
                                    $idFoto = $foto->usuario_id;
                                @endphp
                                    @if($idFoto==$idUs)
                                            @php
                                                break;
                                            @endphp
                                    @endif
                                @endforeach
                                <div class="card">
                                    <div class="col-8">
                                    <div class="p-2">
                                        <img src="{{ asset($foto->foto)}}" class="card-img-top">
                                    </div> </div>
                                    <div class="card-body">
                                    @php
                                        $fecha = $usuario->fecha_nac;
                                        $año = strtok($fecha,'-');
                                        $edad = 2023-$año;
                                    @endphp
                                      <h5 class="card-title">{{ $usuario->name }} {{ $edad }} Años</h5>
                                      {{ $usuario->carrera }}
                                      <p class="card-text">{{ $usuario->genero }}</p>
                                      <div class="d-grid gap-2">
                                        <a class="btn btn-sm btn-dark btn-outline-warning" href="{{ route('usuarios.show',$usuario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Perfil') }}</a>
                                        </div>
                                        </div>
                                  </div>
                                <hr class="border border-dark border-10 opacity-100">
                        @endif
                        @break

                        @case('Todos')
                        @if($usSex==$prefSex2 && $prefCarr==$usCarr2 && $prefCarr2==$usCarr && $idUsu!=$idActu )
                                @foreach ($fotos as $foto)
                                @php
                                    $idUs = $usuario->id;
                                    $idFoto = $foto->usuario_id;
                                @endphp
                                    @if($idFoto==$idUs)
                                            @php
                                                break;
                                            @endphp
                                    @endif
                                @endforeach

                          <div class="card">
                                <img src="{{ asset($foto->foto)}}" class="img-fluid">
                            <div class="card-body">
                            @php
                                $fecha = $usuario->fecha_nac;
                                $año = strtok($fecha,'-');
                                $edad = 2023-$año;
                            @endphp
                              <h5 class="card-title">{{ $usuario->name }} {{ $edad }} Años</h5>
                              {{ $usuario->carrera }}
                              <p class="card-text">{{ $usuario->genero }}</p>
                              <div class="d-grid gap-2">
                                <a class="btn btn-sm btn-dark btn-outline-warning" href="{{ route('usuarios.show',$usuario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Perfil') }}</a>
                                </div>
                                </div>
                          </div>
                        <hr class="border border-dark border-10 opacity-100">

                        @endif
                        @break

                        @default
                    @endswitch
                    @endforeach

        </div>
    </div>
</div>
@endsection
