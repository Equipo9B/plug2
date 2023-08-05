@extends('layouts.app')

@section('content')
<h1>Inicio</h1>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
            <h4>Visualizando Inicio:</h4>
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Sexo</th>
                    <th>Buscando:</th>
                    <th>Carrera</th>
                    <th>Carrera(a buscar)</th>
                    <th>Foto:</th>
                    <th>Acción:</th>

                </thead>
                <tbody>
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
                                <tr>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->genero}}</td>
                                <td>{{$usuario->busqueda}}</td>
                                <td>{{$usuario->carrera}}</td>
                                <td>{{$usuario->interes}}</td>
                                <td>
                                    @foreach ($fotos as $foto)
                                @php
                                    $idUs = $usuario->id;
                                    $idFoto = $foto->usuario_id;
                                @endphp
                                    @if($idFoto==$idUs)
                                            <img src="{{ asset($foto->foto)}}" width="150" height="150" class="img img-responsive">
                                            @php
                                            break;
                                            @endphp
                                    @endif
                                    @endforeach
                                </td>
                                    <td>
                                    <div class="float-right">
                                        <a class="btn btn-sm btn-primary " href="{{ route('usuarios.show',$usuario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                    </a>
                                    </div>
                                    </td>
                                </tr>
                            @endif
                            @break
                        @case('Mujer')
                        @if($usSex==$prefSex2 && $usSex2=='Mujer' && $prefCarr==$usCarr2 && $prefCarr2==$usCarr && $idUsu!=$idActu)
                        <tr>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->genero}}</td>
                            <td>{{$usuario->busqueda}}</td>
                            <td>{{$usuario->carrera}}</td>
                            <td>{{$usuario->interes}}</td>
                            <td>
                                @foreach ($fotos as $foto)
                                @php
                                    $idUs = $usuario->id;
                                    $idFoto = $foto->usuario_id;
                                @endphp
                                    @if($idFoto==$idUs)
                                            <img src="{{ asset($foto->foto)}}" width="150" height="150" class="img img-responsive">
                                            @php
                                                break;
                                            @endphp
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <div class="float-right">
                                    <a class="btn btn-sm btn-primary " href="{{ route('usuarios.show',$usuario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                </a>
                                </div>
                                </td>
                        </tr>
                        @endif
                        @break

                        @case('Todos')
                        @if($usSex==$prefSex2 && $prefCarr==$usCarr2 && $prefCarr2==$usCarr && $idUsu!=$idActu )
                        <tr>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->genero}}</td>
                            <td>{{$usuario->busqueda}}</td>
                            <td>{{$usuario->carrera}}</td>
                            <td>{{$usuario->interes}}</td>
                            <td>
                                @foreach ($fotos as $foto)
                                @php
                                    $idUs = $usuario->id;
                                    $idFoto = $foto->usuario_id;
                                @endphp
                                    @if($idFoto==$idUs)
                                            <img src="{{ asset($foto->foto)}}" width="150" height="150" class="img img-responsive">
                                            @php
                                                break;
                                            @endphp
                                    @endif
                                @endforeach
                                </td>
                                <td>
                                <div class="float-right">
                                    <a class="btn btn-sm btn-primary " href="{{ route('usuarios.show',$usuario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                </a>
                                </div>
                                </td>
                        </tr>
                        @endif
                        @break
                        @default

                    @endswitch

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
