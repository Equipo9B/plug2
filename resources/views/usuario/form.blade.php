<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $usuario->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placehoalder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>        <br>

        <div class="form-group">
            {{ Form::label('correo electronico') }}
            {{ Form::email('email', $usuario->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>        <br>

        <div class="form-group">
            {{ Form::hidden('password', $usuario->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Fecha de nacimiento') }}
            {{ Form::date('fecha_nac', $usuario->fecha_nac, ['class' => 'form-control' . ($errors->has('fecha_nac') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nac']) }}
            {!! $errors->first('fecha_nac', '<div class="invalid-feedback">:message</div>') !!}
        </div>



        <div class="mb-3">
            <label for="genero" class="form-label">Sexo:</label>
            <select class="form-select" id="genero" name="genero" aria-label="Default select example">
                <option selected>{{ $usuario->genero }}</option>
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
                <option selected>{{ $usuario->busqueda }}</option>
                <option value="Hombre">Hombres</option>
                <option value="Mujer">Mujeres</option>
                <option value="Todos">Todos</option>
            </select>
          </div>

        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera (de usuario):</label>
            <select class="form-select" id="carrera" name="carrera" aria-label="Default select example">
                <option selected>{{ $usuario->carrera }}</option>
                <option value="Contaduria">Contaduria</option>
                <option value="Tecnonlogías de la información">Tecnonlogías de la información</option>
                <option value="Energías renovables">Energías renovables</option>
                <option value="Mecánica industrial">Mecánica industrial</option>
                <option value="Mantenimiento industrial">Mantenimiento industrial</option>
                <option value="Mantenimiento petrolero">Mantenimiento petrolero</option>
                <option value="Mecatrónica">Mecatrónica</option>
            </select>
          </div>

        <div class="form-group">
            <label for="interes" class="form-label">Carrera (a buscar):</label>
            <select class="form-select" id="interes" name="interes" aria-label="Default select example">
                <option selected>{{ $usuario->interes }}</option>
                <option value="Todas">Todas</option>
                <option value="Contaduria">Contaduria</option>
                <option value="Tecnonlogías de la información">Tecnonlogías de la información</option>
                <option value="Energías renovables">Energías renovables</option>
                <option value="Mecánica industrial">Mecánica industrial</option>
                <option value="Mantenimiento industrial">Mantenimiento industrial</option>
                <option value="Mantenimiento petrolero">Mantenimiento petrolero</option>
                <option value="Mecatrónica">Mecatrónica</option>
            </select>
        </div>        <br>


    </div>
    <div class="box-footer mt20">
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-secondary">{{ __('Ingresar') }}</button>
        </div>
    </div>


</div>
