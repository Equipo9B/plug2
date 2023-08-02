@extends('layouts.app')

@section('content')
<h1>PAGINA DE REGISTRO</h1>
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
<form action="{{route('registroPost')}}" method="POST" class="ms-auto me-auto" style="width: 500px">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre completo">
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo Electronico:</label>
      <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo institucional" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="contraseña" class="form-label">Contraseña:</label>
      <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña">
    </div>

    <div class="mb-3">
        <label for="fecha_nac" class="form-label">Fecha de Nacimiento:</label>
        <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="">
      </div>

      <div class="mb-3">
        <label for="genero" class="form-label">Sexo:</label>
        <select class="form-select" id="genero" name="genero" aria-label="Default select example">
            <option selected>Selecciona una opción</option>
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
            <option value="Agender">Agender</option>
            <option value="Andrógino">Andrógino</option>
            <option value="Bigénero">Bigénero</option>
            <option value="FTM">FTM</option>
            <option value="Género fluido">Género fluido</option>
            <option value="Génerop no conforme">Génerop no conforme</option>
            <option value="Género cuestionado">Género cuestionado</option>
            <option value="Género variante">Género variante</option>
            <option value="Genderqueer">Genderqueer</option>
            <option value="MTF">MTF</option>
            <option value="Neutroios">Neutroios</option>
            <option value="No binario">No binario</option>
            <option value="Pangénero">Pangénero</option>
            <option value="Trans">Trans</option>
            <option value="Hombre trans">Hombre trans</option>
            <option value="Mujer trans">Mujer trans</option>
            <option value="Persona trans">Persona trans</option>
            <option value="Dos espiritus">Dos espiritus</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="busqueda" class="form-label">Buscar:</label>
        <select class="form-select" id="busqueda" name="busqueda" aria-label="Default select example">
            <option selected>Selecciona una opción</option>
            <option value="Hombre">Hombres</option>
            <option value="Mujer">Mujeres</option>
            <option value="Todos">Todos</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="carrera" class="form-label">Carrera:</label>
        <select class="form-select" id="carrera" name="carrera" aria-label="Default select example">
            <option selected>Selecciona una carrera</option>
            <option value="Contaduria">Contaduria</option>
            <option value="Tecnonlogías de la información">Tecnonlogías de la información</option>
            <option value="Energías renovables">Energías renovables</option>
            <option value="Mecánica industrial">Mecánica industrial</option>
            <option value="Mantenimiento industrial">Mantenimiento industrial</option>
            <option value="Mantenimiento petrolero">Mantenimiento petrolero</option>
            <option value="Mecatrónica">Mecatrónica</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="interes" class="form-label">Carrera de Interes:</label>
        <select class="form-select" id="interes" name="interes" aria-label="Default select example">
            <option selected>Selecciona una carrera</option>
            <option value="Contaduria">Contaduria</option>
            <option value="Tecnonlogías de la información">Tecnonlogías de la información</option>
            <option value="Energías renovables">Energías renovables</option>
            <option value="Mecánica industrial">Mecánica industrial</option>
            <option value="Mantenimiento industrial">Mantenimiento industrial</option>
            <option value="Mantenimiento petrolero">Mantenimiento petrolero</option>
            <option value="Mecatrónica">Mecatrónica</option>
        </select>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
