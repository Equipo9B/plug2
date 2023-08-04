<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idmatch') }}
            {{ Form::text('idmatch', $mensaje->idmatch, ['class' => 'form-control' . ($errors->has('idmatch') ? ' is-invalid' : ''), 'placeholder' => 'Idmatch']) }}
            {!! $errors->first('idmatch', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id1') }}
            {{ Form::text('id1', $mensaje->id1, ['class' => 'form-control' . ($errors->has('id1') ? ' is-invalid' : ''), 'placeholder' => 'Id1']) }}
            {!! $errors->first('id1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id2') }}
            {{ Form::text('id2', $mensaje->id2, ['class' => 'form-control' . ($errors->has('id2') ? ' is-invalid' : ''), 'placeholder' => 'Id2']) }}
            {!! $errors->first('id2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mensaje1') }}
            {{ Form::text('mensaje1', $mensaje->mensaje1, ['class' => 'form-control' . ($errors->has('mensaje1') ? ' is-invalid' : ''), 'placeholder' => 'Mensaje1']) }}
            {!! $errors->first('mensaje1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mensaje2') }}
            {{ Form::text('mensaje2', $mensaje->mensaje2, ['class' => 'form-control' . ($errors->has('mensaje2') ? ' is-invalid' : ''), 'placeholder' => 'Mensaje2']) }}
            {!! $errors->first('mensaje2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>