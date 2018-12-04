<!-- Fecha Inicio Field -->
<div class="form-group {{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::date('fecha_inicio', null, ['class' => 'form-control', 'id' => 'fecha_inicio']) !!}
        @if ($errors->has('fecha_inicio'))
            <span class="help-block">{{ $errors->first('fecha_inicio') }}</span> 
        @endif
    </div>
</div>

<!-- Fecha Final Field -->
<div class="form-group {{ $errors->has('fecha_final') ? ' has-error' : '' }}">
    {!! Form::label('fecha_final', 'Fecha Final:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::date('fecha_final', null, ['class' => 'form-control', 'id' => 'fecha_final']) !!}
        @if ($errors->has('fecha_final'))
            <span class="help-block">{{ $errors->first('fecha_final') }}</span> 
        @endif
    </div>
</div>

<!-- Terminos Pago Field -->
<div class="form-group {{ $errors->has('terminos_pago') ? ' has-error' : '' }}">
    {!! Form::label('terminos_pago', 'Terminos Pago:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::select('terminos_pago', ['15 dias' => '15 dias', '30 dias' => '30 dias', '60 dias' => '60 dias', 'Manual' => 'Manual'], null, ['class' => 'form-control', 'id' => 'terminos_pago']) !!}
        @if ($errors->has('terminos_pago'))
            <span class="help-block">{{ $errors->first('terminos_pago') }}</span> 
        @endif
    </div>
</div>

<!-- Contactos Id Field -->
<div class="form-group {{ $errors->has('contactos_id') ? ' has-error' : '' }}">
    {!! Form::label('contactos_id', 'Contactos Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('contactos_id', null, [
            'class' => 'form-control', 
            'id' => 'contactos_id', 
            'placeholder' => 'Contactos Id'
        ]) !!}
        @if ($errors->has('contactos_id'))
            <span class="help-block">{{ $errors->first('contactos_id') }}</span> 
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
