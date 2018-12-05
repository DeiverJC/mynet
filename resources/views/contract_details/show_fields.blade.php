<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contractDetail->id !!}</p>
    </div>
</div>

<!-- Plazos Pago Field -->
<div class="form-group">
    {!! Form::label('plazos_pago', 'Plazos Pago:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contractDetail->plazos_pago !!}</p>
    </div>
</div>

<!-- Contrato Id Field -->
<div class="form-group">
    {!! Form::label('contrato_id', 'Contrato Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contractDetail->contrato_id !!}</p>
    </div>
</div>

<!-- Articulos Id Field -->
<div class="form-group">
    {!! Form::label('articulos_id', 'Articulos Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contractDetail->articulos_id !!}</p>
    </div>
</div>

<!-- Valor Mensual Field -->
<div class="form-group">
    {!! Form::label('valor_mensual', 'Valor Mensual:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contractDetail->valor_mensual !!}</p>
    </div>
</div>

<!-- Iva Field -->
<div class="form-group">
    {!! Form::label('iva', 'Iva:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contractDetail->iva !!}</p>
    </div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contractDetail->created_at !!}</p>
    </div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contractDetail->updated_at !!}</p>
    </div>
</div>

