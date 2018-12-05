<!-- Tipo Art Id Field -->
<div class="form-group {{ $errors->has('tipo_art_id') ? ' has-error' : '' }}">
    {!! Form::label('tipo_art_id', 'Tipo Art Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('tipo_art_id', null, [
            'class' => 'form-control', 
            'id' => 'tipo_art_id', 
            'placeholder' => 'Tipo Art Id'
        ]) !!}
        @if ($errors->has('tipo_art_id'))
            <span class="help-block">{{ $errors->first('tipo_art_id') }}</span> 
        @endif
    </div>
</div>

<!-- Submit Field -->
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <a href="{!! route('articles.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>
