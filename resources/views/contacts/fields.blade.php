<!-- Type Contact Id Field -->
<div class="form-group {{ $errors->has('type_contact_id') ? ' has-error' : '' }}">
    {!! Form::label('type_contact_id', 'Type Contact Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('type_contact_id', null, [
            'class' => 'form-control', 
            'id' => 'type_contact_id', 
            'placeholder' => 'Type Contact Id'
        ]) !!}
        @if ($errors->has('type_contact_id'))
            <span class="help-block">{{ $errors->first('type_contact_id') }}</span> 
        @endif
    </div>
</div>

<!-- Type Identification Field -->
<div class="form-group {{ $errors->has('type_identification') ? ' has-error' : '' }}">
    {!! Form::label('type_identification', 'Type Identification:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::select('type_identification', ['Registro civil' => 'RC', 'Tarjeta de identidad' => 'TI', 'Cedula de ciudadania' => 'CC'], null, ['class' => 'form-control', 'id' => 'type_identification']) !!}
        @if ($errors->has('type_identification'))
            <span class="help-block">{{ $errors->first('type_identification') }}</span> 
        @endif
    </div>
</div>

<!-- Indentification Field -->
<div class="form-group {{ $errors->has('indentification') ? ' has-error' : '' }}">
    {!! Form::label('indentification', 'Indentification:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::number('indentification', null, ['class' => 'form-control', 'id' => 'indentification']) !!}
        @if ($errors->has('indentification'))
            <span class="help-block">{{ $errors->first('indentification') }}</span> 
        @endif
    </div>
</div>

<!-- Firstname Field -->
<div class="form-group {{ $errors->has('firstname') ? ' has-error' : '' }}">
    {!! Form::label('firstname', 'Firstname:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('firstname', null, [
            'class' => 'form-control', 
            'id' => 'firstname', 
            'placeholder' => 'Firstname'
        ]) !!}
        @if ($errors->has('firstname'))
            <span class="help-block">{{ $errors->first('firstname') }}</span> 
        @endif
    </div>
</div>

<!-- Lastname Field -->
<div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
    {!! Form::label('lastname', 'Lastname:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('lastname', null, [
            'class' => 'form-control', 
            'id' => 'lastname', 
            'placeholder' => 'Lastname'
        ]) !!}
        @if ($errors->has('lastname'))
            <span class="help-block">{{ $errors->first('lastname') }}</span> 
        @endif
    </div>
</div>

<!-- Address Field -->
<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
    {!! Form::label('address', 'Address:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
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
    {!! Form::label('state', 'State:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
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
    {!! Form::label('city', 'City:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
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
    {!! Form::label('cellphone', 'Cellphone:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
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
    {!! Form::label('phone', 'Phone:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
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
    {!! Form::label('email', 'Email:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
        @if ($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span> 
        @endif
    </div>
</div>

<!-- Observations Field -->
<div class="form-group {{ $errors->has('observations') ? ' has-error' : '' }}">
    {!! Form::label('observations', 'Observations:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
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
