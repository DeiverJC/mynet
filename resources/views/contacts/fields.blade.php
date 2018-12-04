<!-- Tipo Identificacion Field -->
<div class="form-group">
    {!! Form::label('tipo_identificacion', 'Tipo Identificacion:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
            {!! Form::select('tipo_identificacion', ['cedula' => 'cedula', 'tarjeta identidad' => 'tarjeta identidad', 'cedula extranjeria' => 'cedula extranjeria', 'pasaporte' => 'pasaporte'], null, ['class' => 'form-control', 'id' => 'tipo_identificacion']) !!}
            <div class="input-group-addon"><i class="ti-user"></i></div>
        </div>
    </div>
</div>

<!-- Identificacion Field -->
<div class="form-group">
    {!! Form::label('identificacion', 'Identificacion:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
            {!! Form::number('identificacion', null, ['class' => 'form-control', 'id' => 'identificacion']) !!}
            <div class="input-group-addon"><i class="ti-user"></i></div>
        </div>
    </div>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
            {!! Form::text('direccion', null, ['class' => 'form-control', 'id' => 'direccion']) !!}
            <div class="input-group-addon"><i class="ti-user"></i></div>
        </div>
    </div>
</div>

<!-- Ciudad Field -->
<div class="form-group">
    {!! Form::label('ciudad', 'Ciudad:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
            {!! Form::text('ciudad', null, ['class' => 'form-control', 'id' => 'ciudad']) !!}
            <div class="input-group-addon"><i class="ti-user"></i></div>
        </div>
    </div>
</div>

<!-- Departamento Field -->
<div class="form-group">
    {!! Form::label('departamento', 'Departamento:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
            {!! Form::text('departamento', null, ['class' => 'form-control', 'id' => 'departamento']) !!}
            <div class="input-group-addon"><i class="ti-user"></i></div>
        </div>
    </div>
</div>

<!-- Tipo Contacto Id Field -->
<div class="form-group">
    {!! Form::label('tipo_contacto_id', 'Tipo Contacto Id:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
            <select class="form-control" id="tipo_contacto_id" name="tipo_contacto_id" >
                    
                @foreach($type_contacts as $type_contact)
                       <option value="{{ $type_contact->id }}">{{ $type_contact->nombre}}</option>  
                @endforeach
             </select>
            <div class="input-group-addon"><i class="ti-user"></i></div>
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <a href="{!! route('contacts.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>
