<!-- Type Item Field -->
<div class="form-group {{ $errors->has('type_item') ? ' has-error' : '' }}">
    {!! Form::label('type_item', 'Type Item:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::select('type_item', ['1' => 'Servicios', '2' => 'Productos'], null, ['class' => 'form-control', 'id' => 'type_item']) !!}
        @if ($errors->has('type_item'))
            <span class="help-block">{{ $errors->first('type_item') }}</span> 
        @endif
    </div>
</div>

<!-- Title Field -->
<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Nombre:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('title', null, [
            'class' => 'form-control', 
            'id' => 'title', 
            'placeholder' => 'Title'
        ]) !!}
        @if ($errors->has('title'))
            <span class="help-block">{{ $errors->first('title') }}</span> 
        @endif
    </div>
</div>

<!-- Refence Field -->
<div class="form-group {{ $errors->has('refence') ? ' has-error' : '' }}">
    {!! Form::label('refence', 'Codígo referencia:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('refence', null, [
            'class' => 'form-control', 
            'id' => 'refence', 
            'placeholder' => 'Refence'
        ]) !!}
        @if ($errors->has('refence'))
            <span class="help-block">{{ $errors->first('refence') }}</span> 
        @endif
    </div>
</div>

<!-- Sale Price Field -->
<div class="form-group {{ $errors->has('sale_price') ? ' has-error' : '' }}">
    {!! Form::label('sale_price', 'Precio de venta:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('sale_price', null, [
            'class' => 'form-control', 
            'id' => 'sale_price', 
            'placeholder' => 'Sale Price'
        ]) !!}
        @if ($errors->has('sale_price'))
            <span class="help-block">{{ $errors->first('sale_price') }}</span> 
        @endif
    </div>
</div>

<!-- Description Field -->
<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Descripción:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
        @if ($errors->has('description'))
            <span class="help-block">{{ $errors->first('description') }}</span> 
        @endif
    </div>
</div>

<!-- Tax Field -->
<div class="form-group {{ $errors->has('tax') ? ' has-error' : '' }}">
    {!! Form::label('tax', 'Impuesto:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::select('tax', [
             '0' => 'Ninguno - (0%)', 
             '0' => 'IVA - (0%)', 
             '5' => 'IVA - (5%)', 
             '19' => 'IVA - (19%)'
            ], null, [
                'class' => 'form-control', 
                'id' => 'tax'                
        ]) !!}
        @if ($errors->has('tax'))
            <span class="help-block">{{ $errors->first('tax') }}</span> 
        @endif
    </div>
</div>

<!-- Unit Measure Field -->
<div class="form-group {{ $errors->has('unit_measure') ? ' has-error' : '' }}">
    {!! Form::label('unit_measure', 'Unidad de medida:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::select('unit_measure', ['metro' => 'metro', 'kilo' => 'kilo'], null, ['class' => 'form-control', 'id' => 'unit_measure']) !!}
        @if ($errors->has('unit_measure'))
            <span class="help-block">{{ $errors->first('unit_measure') }}</span> 
        @endif
    </div>
</div>

<!-- Unit Price Field -->
<div class="form-group {{ $errors->has('unit_price') ? ' has-error' : '' }}">
    {!! Form::label('unit_price', 'Precio unidad:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('unit_price', null, [
            'class' => 'form-control', 
            'id' => 'unit_price', 
            'placeholder' => 'Unit Price'
        ]) !!}
        @if ($errors->has('unit_price'))
            <span class="help-block">{{ $errors->first('unit_price') }}</span> 
        @endif
    </div>
</div>

<!-- Initial Amount Field -->
<div class="form-group {{ $errors->has('initial_amount') ? ' has-error' : '' }}">
    {!! Form::label('initial_amount', 'Cantidad inicial:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::number('initial_amount', null, ['class' => 'form-control', 'id' => 'initial_amount']) !!}
        @if ($errors->has('initial_amount'))
            <span class="help-block">{{ $errors->first('initial_amount') }}</span> 
        @endif
    </div>
</div>

<!-- Submit Field -->
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <a href="{!! route('items.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function () {
            $(function() {
                $("#type_item").change(function(){
                    if($("option:selected", this).text() == 2){
                        $(".requerido-con-fisico").show();
                    }else{
                        $(".requerido-con-fisico").hide();                
                    }
                });
            });
        });
    </script>
@endpush