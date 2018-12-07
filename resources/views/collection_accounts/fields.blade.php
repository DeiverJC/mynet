<!-- Contract Id Field -->
<div class="form-group {{ $errors->has('contract_id') ? ' has-error' : '' }}">
    {!! Form::label('contract_id', 'Contract Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('contract_id', null, [
            'class' => 'form-control', 
            'id' => 'contract_id', 
            'placeholder' => 'Contract Id'
        ]) !!}
        @if ($errors->has('contract_id'))
            <span class="help-block">{{ $errors->first('contract_id') }}</span> 
        @endif
    </div>
</div>

<!-- Creation Field -->
<div class="form-group {{ $errors->has('creation') ? ' has-error' : '' }}">
    {!! Form::label('creation', 'Creation:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::date('creation', null, ['class' => 'form-control', 'id' => 'creation']) !!}
        @if ($errors->has('creation'))
            <span class="help-block">{{ $errors->first('creation') }}</span> 
        @endif
    </div>
</div>

<!-- Expiration Field -->
<div class="form-group {{ $errors->has('expiration') ? ' has-error' : '' }}">
    {!! Form::label('expiration', 'Expiration:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::date('expiration', null, ['class' => 'form-control', 'id' => 'expiration']) !!}
        @if ($errors->has('expiration'))
            <span class="help-block">{{ $errors->first('expiration') }}</span> 
        @endif
    </div>
</div>

<!-- Total Field -->
<div class="form-group {{ $errors->has('total') ? ' has-error' : '' }}">
    {!! Form::label('total', 'Total:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('total', null, [
            'class' => 'form-control', 
            'id' => 'total', 
            'placeholder' => 'Total'
        ]) !!}
        @if ($errors->has('total'))
            <span class="help-block">{{ $errors->first('total') }}</span> 
        @endif
    </div>
</div>

<!-- Paid Field -->
<div class="form-group {{ $errors->has('paid') ? ' has-error' : '' }}">
    {!! Form::label('paid', 'Paid:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('paid', null, [
            'class' => 'form-control', 
            'id' => 'paid', 
            'placeholder' => 'Paid'
        ]) !!}
        @if ($errors->has('paid'))
            <span class="help-block">{{ $errors->first('paid') }}</span> 
        @endif
    </div>
</div>

<!-- To Pay Field -->
<div class="form-group {{ $errors->has('to_pay') ? ' has-error' : '' }}">
    {!! Form::label('to_pay', 'To Pay:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('to_pay', null, [
            'class' => 'form-control', 
            'id' => 'to_pay', 
            'placeholder' => 'To Pay'
        ]) !!}
        @if ($errors->has('to_pay'))
            <span class="help-block">{{ $errors->first('to_pay') }}</span> 
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

<!-- Submit Field -->
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <a href="{!! route('collectionAccounts.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>
