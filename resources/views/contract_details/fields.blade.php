<!-- Plazos Pago Field -->
<div class="form-group {{ $errors->has('plazos_pago') ? ' has-error' : '' }}">
    {!! Form::label('plazos_pago', 'Plazos Pago:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('plazos_pago', null, [
            'class' => 'form-control', 
            'id' => 'plazos_pago', 
            'placeholder' => 'Plazos Pago'
        ]) !!}
        @if ($errors->has('plazos_pago'))
            <span class="help-block">{{ $errors->first('plazos_pago') }}</span> 
        @endif
    </div>
</div>

<!-- Contrato Id Field -->
<div class="form-group {{ $errors->has('contrato_id') ? ' has-error' : '' }}">
    {!! Form::label('contrato_id', 'Contrato Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('contrato_id', null, [
            'class' => 'form-control', 
            'id' => 'contrato_id', 
            'placeholder' => 'Contrato Id'
        ]) !!}
        @if ($errors->has('contrato_id'))
            <span class="help-block">{{ $errors->first('contrato_id') }}</span> 
        @endif
    </div>
</div>

<!-- Articulos Id Field -->
<div class="form-group {{ $errors->has('articulos_id') ? ' has-error' : '' }}">
    {!! Form::label('articulos_id', 'Articulos Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('articulos_id', null, [
            'class' => 'form-control', 
            'id' => 'articulos_id', 
            'placeholder' => 'Articulos Id'
        ]) !!}
        @if ($errors->has('articulos_id'))
            <span class="help-block">{{ $errors->first('articulos_id') }}</span> 
        @endif
    </div>
</div>

<!-- Valor Mensual Field -->
<div class="form-group {{ $errors->has('valor_mensual') ? ' has-error' : '' }}">
    {!! Form::label('valor_mensual', 'Valor Mensual:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('valor_mensual', null, [
            'class' => 'form-control', 
            'id' => 'valor_mensual', 
            'placeholder' => 'Valor Mensual'
        ]) !!}
        @if ($errors->has('valor_mensual'))
            <span class="help-block">{{ $errors->first('valor_mensual') }}</span> 
        @endif
    </div>
</div>

<!-- Iva Field -->
<div class="form-group {{ $errors->has('iva') ? ' has-error' : '' }}">
    {!! Form::label('iva', 'Iva:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::select('iva', ['2%' => '2%', '5%' => '5%', '12%' => '12%', '15%' => '15%', '19%' => '19%'], null, ['class' => 'form-control', 'id' => 'iva']) !!}
        @if ($errors->has('iva'))
            <span class="help-block">{{ $errors->first('iva') }}</span> 
        @endif
    </div>
</div>

<!-- Submit Field -->
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <a href="{!! route('contractDetails.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>
