@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
            <h1>HOBBIES</h1>
            <a href="{{ route('hobbies.create') }}">Crear Hobbies</a>
        </div>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Turno</td>
                <td>Foto</td>
            </tr>
        </thead>
        <tbody>
            @foreach($hobbies as $hobbie)
            <tr>
                <td>{{ $hobbie->id }}</td>
                <td>{{ $hobbie->nombre }}</td>
                <td>{{ $hobbie->turno }}</td>
                <td>{{ $hobbie->foto }}</td>
            </tr>
            @endforeach
        </tbody>
    </div>

    <div class="card-footer">
        <h4>LISTA DE HOBBIES</h4>
    </div>
</table>
</div>
@endsection
