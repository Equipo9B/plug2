<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('usuarioId1') }}
            {{ Form::text('usuarioId1', $coincidencia->usuarioId1, ['class' => 'form-control' . ($errors->has('usuarioId1') ? ' is-invalid' : ''), 'placeholder' => 'Usuarioid1']) }}
            {!! $errors->first('usuarioId1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuarioId2') }}
            {{ Form::text('usuarioId2', $coincidencia->usuarioId2, ['class' => 'form-control' . ($errors->has('usuarioId2') ? ' is-invalid' : ''), 'placeholder' => 'Usuarioid2']) }}
            {!! $errors->first('usuarioId2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('match1') }}
            {{ Form::text('match1', $coincidencia->match1, ['class' => 'form-control' . ($errors->has('match1') ? ' is-invalid' : ''), 'placeholder' => 'Match1']) }}
            {!! $errors->first('match1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('match2') }}
            {{ Form::text('match2', $coincidencia->match2, ['class' => 'form-control' . ($errors->has('match2') ? ' is-invalid' : ''), 'placeholder' => 'Match2']) }}
            {!! $errors->first('match2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>