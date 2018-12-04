<!-- Tipo Identificacion Field -->
<div class="form-group {{ $errors->has('tipo_identificacion') ? ' has-error' : '' }}">
    {!! Form::label('tipo_identificacion', 'Tipo Identificacion:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::select('tipo_identificacion', ['cedula' => 'cedula', 'tarjeta identidad' => 'tarjeta identidad', 'cedula extranjeria' => 'cedula extranjeria', 'pasaporte' => 'pasaporte'], null, ['class' => 'form-control', 'id' => 'tipo_identificacion']) !!}
        @if ($errors->has('tipo_identificacion'))
            <span class="help-block">{{ $errors->first('tipo_identificacion') }}</span> 
        @endif
    </div>
</div>

<!-- Identificacion Field -->
<div class="form-group {{ $errors->has('identificacion') ? ' has-error' : '' }}">
    {!! Form::label('identificacion', 'Identificacion:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::number('identificacion', null, ['class' => 'form-control', 'id' => 'identificacion']) !!}
        @if ($errors->has('identificacion'))
            <span class="help-block">{{ $errors->first('identificacion') }}</span> 
        @endif
    </div>
</div>

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

<!-- Apellido Field -->
<div class="form-group {{ $errors->has('apellido') ? ' has-error' : '' }}">
    {!! Form::label('apellido', 'Apellido:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('apellido', null, [
            'class' => 'form-control', 
            'id' => 'apellido', 
            'placeholder' => 'Apellido'
        ]) !!}
        @if ($errors->has('apellido'))
            <span class="help-block">{{ $errors->first('apellido') }}</span> 
        @endif
    </div>
</div>

<!-- Direccion Field -->
<div class="form-group {{ $errors->has('direccion') ? ' has-error' : '' }}">
    {!! Form::label('direccion', 'Direccion:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('direccion', null, [
            'class' => 'form-control', 
            'id' => 'direccion', 
            'placeholder' => 'Direccion'
        ]) !!}
        @if ($errors->has('direccion'))
            <span class="help-block">{{ $errors->first('direccion') }}</span> 
        @endif
    </div>
</div>

<!-- Ciudad Field -->
<div class="form-group {{ $errors->has('ciudad') ? ' has-error' : '' }}">
    {!! Form::label('ciudad', 'Ciudad:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('ciudad', null, [
            'class' => 'form-control', 
            'id' => 'ciudad', 
            'placeholder' => 'Ciudad'
        ]) !!}
        @if ($errors->has('ciudad'))
            <span class="help-block">{{ $errors->first('ciudad') }}</span> 
        @endif
    </div>
</div>

<!-- Departamento Field -->
<div class="form-group {{ $errors->has('departamento') ? ' has-error' : '' }}">
    {!! Form::label('departamento', 'Departamento:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('departamento', null, [
            'class' => 'form-control', 
            'id' => 'departamento', 
            'placeholder' => 'Departamento'
        ]) !!}
        @if ($errors->has('departamento'))
            <span class="help-block">{{ $errors->first('departamento') }}</span> 
        @endif
    </div>
</div>

<!-- Tipo Contacto Id Field -->
<div class="form-group {{ $errors->has('tipo_contacto_id') ? ' has-error' : '' }}">
    {!! Form::label('tipo_contacto_id', 'Tipo Contacto Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('tipo_contacto_id', null, [
            'class' => 'form-control', 
            'id' => 'tipo_contacto_id', 
            'placeholder' => 'Tipo Contacto Id'
        ]) !!}
        @if ($errors->has('tipo_contacto_id'))
            <span class="help-block">{{ $errors->first('tipo_contacto_id') }}</span> 
        @endif
    </div>
</div>

<!-- Submit Field -->
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <a href="{!! route('contacts.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>
