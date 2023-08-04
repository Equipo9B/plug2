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

                        echo $idUsu;
                    @endphp

                    <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->genero }}</td>
                    <td>{{ $usuario->busqueda }}</td>
                    <td>{{ $usuario->carrera }}</td>
                    <td>{{ $usuario->interes }}</td>
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
                        <a class="btn btn-sm btn-primary " href="{{ route('usuarios.show',$usuario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                    </div>
                    </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
