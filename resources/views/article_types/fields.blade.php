<!-- Nombre Field -->
<div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
    {!! Form::label('nombre', 'Nombre:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('nombre', null, [
            'class' => 'form-control', 
            'id' => 'nombre', 
            'placeholder' => 'Nombre'
        ]) !!}
        @if ($errors->has('nombre'))
            <span class="help-block">{{ $errors->first('nombre') }}</span> 
        @endif
    </div>
</div>

<!-- Submit Field -->
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <a href="{!! route('articleTypes.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>
