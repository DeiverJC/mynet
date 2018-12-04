<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->id !!}</p>
    </div>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->fecha_inicio !!}</p>
    </div>
</div>

<!-- Fecha Final Field -->
<div class="form-group">
    {!! Form::label('fecha_final', 'Fecha Final:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->fecha_final !!}</p>
    </div>
</div>

<!-- Terminos Pago Field -->
<div class="form-group">
    {!! Form::label('terminos_pago', 'Terminos Pago:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->terminos_pago !!}</p>
    </div>
</div>

<!-- Contactos Id Field -->
<div class="form-group">
    {!! Form::label('contactos_id', 'Contactos Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->contactos_id !!}</p>
    </div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->created_at !!}</p>
    </div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->updated_at !!}</p>
    </div>
</div>

