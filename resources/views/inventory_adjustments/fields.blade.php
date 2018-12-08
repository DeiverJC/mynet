<!-- Item Id Field -->
<div class="form-group {{ $errors->has('item_id') ? ' has-error' : '' }}">
    {!! Form::label('item_id', 'Item Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('item_id', null, [
            'class' => 'form-control', 
            'id' => 'item_id', 
            'placeholder' => 'Item Id'
        ]) !!}
        @if ($errors->has('item_id'))
            <span class="help-block">{{ $errors->first('item_id') }}</span> 
        @endif
    </div>
</div>

<!-- Adjustment Type Field -->
<div class="form-group {{ $errors->has('adjustment_type') ? ' has-error' : '' }}">
    {!! Form::label('adjustment_type', 'Adjustment Type:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::select('adjustment_type', ['increase' => 'increase', 'decrease' => 'decrease'], null, ['class' => 'form-control', 'id' => 'adjustment_type']) !!}
        @if ($errors->has('adjustment_type'))
            <span class="help-block">{{ $errors->first('adjustment_type') }}</span> 
        @endif
    </div>
</div>

<!-- Current Amount Field -->
<div class="form-group {{ $errors->has('current_amount') ? ' has-error' : '' }}">
    {!! Form::label('current_amount', 'Current Amount:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('current_amount', null, [
            'class' => 'form-control', 
            'id' => 'current_amount', 
            'placeholder' => 'Current Amount'
        ]) !!}
        @if ($errors->has('current_amount'))
            <span class="help-block">{{ $errors->first('current_amount') }}</span> 
        @endif
    </div>
</div>

<!-- Amount Field -->
<div class="form-group {{ $errors->has('amount') ? ' has-error' : '' }}">
    {!! Form::label('amount', 'Amount:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('amount', null, [
            'class' => 'form-control', 
            'id' => 'amount', 
            'placeholder' => 'Amount'
        ]) !!}
        @if ($errors->has('amount'))
            <span class="help-block">{{ $errors->first('amount') }}</span> 
        @endif
    </div>
</div>

<!-- Final Amount Field -->
<div class="form-group {{ $errors->has('final_amount') ? ' has-error' : '' }}">
    {!! Form::label('final_amount', 'Final Amount:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('final_amount', null, [
            'class' => 'form-control', 
            'id' => 'final_amount', 
            'placeholder' => 'Final Amount'
        ]) !!}
        @if ($errors->has('final_amount'))
            <span class="help-block">{{ $errors->first('final_amount') }}</span> 
        @endif
    </div>
</div>

<!-- Date Field -->
<div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
    {!! Form::label('date', 'Date:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::date('date', null, ['class' => 'form-control', 'id' => 'date']) !!}
        @if ($errors->has('date'))
            <span class="help-block">{{ $errors->first('date') }}</span> 
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
        <a href="{!! route('inventoryAdjustments.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>
