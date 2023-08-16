@extends('layouts.app4')

@section('template_title')
    {{ __('Update') }} Usuario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizacion de') }} Perfil
                        </span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('usuario.form')

                        </form>
                        <br> <br>

                        <form action="{{ route('users.destroy',$usuario->id) }}" method="POST">
                            <div class="d-grid gap-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">{{ __('Borrar Perfil') }}</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
