<!-- Contact Id Field -->
<div class="form-group {{ $errors->has('contact_id') ? ' has-error' : '' }}">
    {!! Form::label('contact_id', 'Contact Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('contact_id', null, [
            'class' => 'form-control', 
            'id' => 'contact_id', 
            'placeholder' => 'Contact Id'
        ]) !!}
        @if ($errors->has('contact_id'))
            <span class="help-block">{{ $errors->first('contact_id') }}</span> 
        @endif
    </div>
</div>

<!-- Start Date Field -->
<div class="form-group {{ $errors->has('start_date') ? ' has-error' : '' }}">
    {!! Form::label('start_date', 'Start Date:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::date('start_date', null, ['class' => 'form-control', 'id' => 'start_date']) !!}
        @if ($errors->has('start_date'))
            <span class="help-block">{{ $errors->first('start_date') }}</span> 
        @endif
    </div>
</div>

<!-- Finish Date Field -->
<div class="form-group {{ $errors->has('finish_date') ? ' has-error' : '' }}">
    {!! Form::label('finish_date', 'Finish Date:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::date('finish_date', null, ['class' => 'form-control', 'id' => 'finish_date']) !!}
        @if ($errors->has('finish_date'))
            <span class="help-block">{{ $errors->first('finish_date') }}</span> 
        @endif
    </div>
</div>

<!-- Status Field -->
<div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
    {!! Form::label('status', 'Status:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::select('status', ['active' => 'Activo', 'suspended' => 'Suspendido', 'canceled' => 'Cancelado'], null, ['class' => 'form-control', 'id' => 'status']) !!}
        @if ($errors->has('status'))
            <span class="help-block">{{ $errors->first('status') }}</span> 
        @endif
    </div>
</div>

<!-- Payment Term Field -->
<div class="form-group {{ $errors->has('payment_term') ? ' has-error' : '' }}">
    {!! Form::label('payment_term', 'Payment Term:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::select('payment_term', ['0' => 'Ninguno', '8' => '8 días', '15' => '15 días', '30' => '30 días', '60' => '60 días'], null, ['class' => 'form-control', 'id' => 'payment_term']) !!}
        @if ($errors->has('payment_term'))
            <span class="help-block">{{ $errors->first('payment_term') }}</span> 
        @endif
    </div>
</div>

<!-- Submit Field -->
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <a href="{!! route('contracts.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>
