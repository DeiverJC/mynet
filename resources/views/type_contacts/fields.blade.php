<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
            {!! Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) !!}
            <div class="input-group-addon"><i class="ti-user"></i></div>
        </div>
    </div>
</div>

<!-- Observacion Field -->
<div class="form-group">
    {!! Form::label('observacion', 'Observacion:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
            {!! Form::text('observacion', null, ['class' => 'form-control', 'id' => 'observacion']) !!}
            <div class="input-group-addon"><i class="ti-user"></i></div>
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <a href="{!! route('typeContacts.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>
