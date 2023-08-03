<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::hidden('usuarioId1', $id2, ['class' => 'form-control' . ($errors->has('usuarioId1') ? ' is-invalid' : ''), 'placeholder' => 'Usuarioid1']) }}
            {!! $errors->first('usuarioId1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::hidden('usuarioId2', $id1, ['class' => 'form-control' . ($errors->has('usuarioId2') ? ' is-invalid' : ''), 'placeholder' => 'Usuarioid2']) }}
            {!! $errors->first('usuarioId2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::hidden('match1', '1', ['class' => 'form-control' . ($errors->has('match1') ? ' is-invalid' : ''), 'placeholder' => 'Match1']) }}
            {!! $errors->first('match1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::hidden('match2', '1', ['class' => 'form-control' . ($errors->has('match2') ? ' is-invalid' : ''), 'placeholder' => 'Match2']) }}
            {!! $errors->first('match2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
</div>
