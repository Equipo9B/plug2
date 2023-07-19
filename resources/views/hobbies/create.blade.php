@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('hobbies.store') }}" method="POST"></form>
    @csrf
    <div class="card">
        <div class="card-header">
            <h1>HOBBIES</h1>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="mb-3">
                <label for="turno" class="form-label">Turno</label>
                <input type="text" class="form-control" id="turno" name="turno" placeholder="Turno">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="fotografia" placeholder="Foto">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-access">Enviar</button>

        </div>
    </div>
</form>
</div>

@endsection
