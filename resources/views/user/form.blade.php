<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nac') }}
            {{ Form::text('fecha_nac', $user->fecha_nac, ['class' => 'form-control' . ($errors->has('fecha_nac') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nac']) }}
            {!! $errors->first('fecha_nac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::text('genero', $user->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('busqueda') }}
            {{ Form::text('busqueda', $user->busqueda, ['class' => 'form-control' . ($errors->has('busqueda') ? ' is-invalid' : ''), 'placeholder' => 'Busqueda']) }}
            {!! $errors->first('busqueda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('carrera') }}
            {{ Form::text('carrera', $user->carrera, ['class' => 'form-control' . ($errors->has('carrera') ? ' is-invalid' : ''), 'placeholder' => 'Carrera']) }}
            {!! $errors->first('carrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('interes') }}
            {{ Form::text('interes', $user->interes, ['class' => 'form-control' . ($errors->has('interes') ? ' is-invalid' : ''), 'placeholder' => 'Interes']) }}
            {!! $errors->first('interes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('active_status') }}
            {{ Form::text('active_status', $user->active_status, ['class' => 'form-control' . ($errors->has('active_status') ? ' is-invalid' : ''), 'placeholder' => 'Active Status']) }}
            {!! $errors->first('active_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('avatar') }}
            {{ Form::text('avatar', $user->avatar, ['class' => 'form-control' . ($errors->has('avatar') ? ' is-invalid' : ''), 'placeholder' => 'Avatar']) }}
            {!! $errors->first('avatar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dark_mode') }}
            {{ Form::text('dark_mode', $user->dark_mode, ['class' => 'form-control' . ($errors->has('dark_mode') ? ' is-invalid' : ''), 'placeholder' => 'Dark Mode']) }}
            {!! $errors->first('dark_mode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('messenger_color') }}
            {{ Form::text('messenger_color', $user->messenger_color, ['class' => 'form-control' . ($errors->has('messenger_color') ? ' is-invalid' : ''), 'placeholder' => 'Messenger Color']) }}
            {!! $errors->first('messenger_color', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>