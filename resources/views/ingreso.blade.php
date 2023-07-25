@extends('layouts.app')

@section('content')
<h1>Inicio de Sesión</h1>
<div class="container">
    <div class="mt-5">
        @if($errors->any())
            <div class="col-12">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session()->has('exito'))
            <div class="alert alert-success">{{ session('exito') }}</div>
        @endif

    </div>
<form action="{{route('ingresoPost')}}" method="POST" class="ms-auto me-auto" style="width: 500px">
    @csrf
    <div class="mb-3">
      <label for="correo" class="form-label">Correo Electronico</label>
      <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="contraseña" class="form-label">Contraseña</label>
      <input type="password" class="form-control" name="contraseña" id="contraseña">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
