<!-- Type Identification Field -->
<div class="form-group {{ $errors->has('type_identification') ? ' has-error' : '' }}">
    {!! Form::label('type_identification', 'Tipo de identificación*:', [
        'class' => 'control-label col-md-4']
    ) !!}
    <div class="col-md-8">
        {!! Form::select('type_identification', [
                'NIT' => 'Número de identificación tributaria',
                'CC' => 'Cédula de ciudadanía',
                'DIE' => 'Documento de identificación extrajero',
                'PP' => 'Pasaporte',
                'CE' => 'Cédula de extranjería',
                'TE' => 'Tarjeta de extranjería',
                'TI' => 'Tarjeta de identidad',
                'RC' => 'Registro civil'
            ],
            null, [
            'class' => 'form-control',
            'required' => 'required',
            'placeholder' => 'Elija una opción...'
        ]) !!}
        @if ($errors->has('type_identification'))
            <span class="help-block">{{ $errors->first('type_identification') }}</span> 
        @endif
    </div>
</div>

<!-- Indentification Field -->
<div class="form-group {{ $errors->has('indentification') ? ' has-error' : '' }}">
    {!! Form::label('indentification', 'Identificación:', ['class' => 'control-label col-md-4']) !!}
    <div class="col-md-8">
        {!! Form::number('indentification', null, ['class' => 'form-control', 'id' => 'indentification']) !!}
        @if ($errors->has('indentification'))
            <span class="help-block">{{ $errors->first('indentification') }}</span> 
        @endif
    </div>
</div>

<!-- Fullname Field -->
<div class="form-group {{ $errors->has('fullname') ? ' has-error' : '' }}">
    {!! Form::label('fullname', 'Nombre y apellido*', ['class' => 'control-label col-md-4']) !!}
    <div class="col-md-8">
        {!! Form::text('fullname', null, [
            'class' => 'form-control', 
            'id' => 'fullname', 
            'placeholder' => 'Fullname'
        ]) !!}
        @if ($errors->has('fullname'))
            <span class="help-block">{{ $errors->first('fullname') }}</span> 
        @endif
    </div>
</div>

<!-- Address Field -->
<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
    {!! Form::label('address', 'Dirección:*', ['class' => 'control-label col-md-4']) !!}
    <div class="col-md-8">
        {!! Form::text('address', null, [
            'class' => 'form-control', 
            'id' => 'address', 
            'placeholder' => 'Address'
        ]) !!}
        @if ($errors->has('address'))
            <span class="help-block">{{ $errors->first('address') }}</span> 
        @endif
    </div>
</div>

<!-- State Field -->
<div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
    {!! Form::label('state', 'Departamento*', ['class' => 'control-label col-md-4']) !!}
    <div class="col-md-8">
        {!! Form::text('state', null, [
            'class' => 'form-control', 
            'id' => 'state', 
            'placeholder' => 'State'
        ]) !!}
        @if ($errors->has('state'))
            <span class="help-block">{{ $errors->first('state') }}</span> 
        @endif
    </div>
</div>

<!-- City Field -->
<div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
    {!! Form::label('city', 'Municipio:', ['class' => 'control-label col-md-4']) !!}
    <div class="col-md-8">
        {!! Form::text('city', null, [
            'class' => 'form-control', 
            'id' => 'city', 
            'placeholder' => 'City'
        ]) !!}
        @if ($errors->has('city'))
            <span class="help-block">{{ $errors->first('city') }}</span> 
        @endif
    </div>
</div>

<!-- Cellphone Field -->
<div class="form-group {{ $errors->has('cellphone') ? ' has-error' : '' }}">
    {!! Form::label('cellphone', 'Celular:', ['class' => 'control-label col-md-4']) !!}
    <div class="col-md-8">
        {!! Form::text('cellphone', null, [
            'class' => 'form-control', 
            'id' => 'cellphone', 
            'placeholder' => 'Cellphone'
        ]) !!}
        @if ($errors->has('cellphone'))
            <span class="help-block">{{ $errors->first('cellphone') }}</span> 
        @endif
    </div>
</div>

<!-- Phone Field -->
<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
    {!! Form::label('phone', 'Teléfono:', ['class' => 'control-label col-md-4']) !!}
    <div class="col-md-8">
        {!! Form::text('phone', null, [
            'class' => 'form-control', 
            'id' => 'phone', 
            'placeholder' => 'Phone'
        ]) !!}
        @if ($errors->has('phone'))
            <span class="help-block">{{ $errors->first('phone') }}</span> 
        @endif
    </div>
</div>

<!-- Email Field -->
<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Correo electrónico:', ['class' => 'control-label col-md-4']) !!}
    <div class="col-md-8">
        {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
        @if ($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span> 
        @endif
    </div>
</div>
<!-- Type Contact Id Field -->
<div class="form-group {{ $errors->has('type_contact_id') ? ' has-error' : '' }}">
        {!! Form::label('type_contact_id', 'Type Contact Id:', ['class' => 'control-label col-md-4']) !!}
        <div class="col-md-8">
            {!! Form::select('type_contact_id', $typeContacts, null, [
                'class' => 'form-control', 
                'id' => 'type_contact_id',
                'placeholder' => 'Elija una opción'
            ]) !!}
            @if ($errors->has('type_contact_id'))
                <span class="help-block">{{ $errors->first('type_contact_id') }}</span> 
            @endif
        </div>
    </div>

<!-- Observations Field -->
<div class="form-group {{ $errors->has('observations') ? ' has-error' : '' }}">
    {!! Form::label('observations', 'Observations:', ['class' => 'control-label col-md-4']) !!}
    <div class="col-md-8">
        {!! Form::textarea('observations', null, ['class' => 'form-control', 'id' => 'observations']) !!}
        @if ($errors->has('observations'))
            <span class="help-block">{{ $errors->first('observations') }}</span> 
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
