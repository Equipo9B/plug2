@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fecha_nac" class="col-md-4 col-form-label text-md-end">{{ __('Fecha de Nacimiento') }}</label>
                            <div class="col-md-6">
                                <input id="fecha_nac" type="date" class="form-control @error('fecha_nac') is-invalid @enderror" name="fecha_nac" value="{{ old('fecha_nac') }}" required autocomplete="fecha_nac" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="genero" class="col-md-4 col-form-label text-md-end">{{ __('Sexo') }}</label>
                            <div class="col-md-6">
                                <select id="genero" type="text" class="form-select @error('genero') is-invalid @enderror" name="genero" value="{{ old('genero') }}" required autocomplete="genero" autofocus>
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
                        </div>

                        <div class="row mb-3">
                            <label for="busqueda" class="col-md-4 col-form-label text-md-end">{{ __('Buscar') }}</label>
                            <div class="col-md-6">
                                <select id="busqueda" type="text" class="form-select @error('busqueda') is-invalid @enderror" name="busqueda" value="{{ old('busqueda') }}" required autocomplete="busqueda" autofocus>
                                    <option selected>Selecciona una opción</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                    <option value="Todos">Todos</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="carrera" class="col-md-4 col-form-label text-md-end">{{ __('Carrera a cursar') }}</label>
                            <div class="col-md-6">
                                <select id="carrera" type="text" class="form-select @error('carrera') is-invalid @enderror" name="carrera" value="{{ old('carrera') }}" required autocomplete="carrera" autofocus>
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
                        </div>

                        <div class="row mb-3">
                            <label for="interes" class="col-md-4 col-form-label text-md-end">{{ __('Carrera a buscar') }}</label>
                            <div class="col-md-6">
                                <select id="interes" type="text" class="form-select @error('interes') is-invalid @enderror" name="interes" value="{{ old('interes') }}" required autocomplete="interes" autofocus>
                                    <option selected>Selecciona una carrera</option>
                                    <option value="Todas">Todas</option>
                                    <option value="Contaduria">Contaduria</option>
                                    <option value="Tecnonlogías de la información">Tecnonlogías de la información</option>
                                    <option value="Energías renovables">Energías renovables</option>
                                    <option value="Mecánica industrial">Mecánica industrial</option>
                                    <option value="Mantenimiento industrial">Mantenimiento industrial</option>
                                    <option value="Mantenimiento petrolero">Mantenimiento petrolero</option>
                                    <option value="Mecatrónica">Mecatrónica</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
