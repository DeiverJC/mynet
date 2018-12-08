<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $item->id !!}</p>
    </div>
</div>

<!-- Is Inventorial Field -->
<div class="form-group">
    {!! Form::label('is_inventorial', 'Is Inventorial:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $item->is_inventorial !!}</p>
    </div>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $item->title !!}</p>
    </div>
</div>

<!-- Refence Code Field -->
<div class="form-group">
    {!! Form::label('refence_code', 'Refence Code:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $item->refence_code !!}</p>
    </div>
</div>

<!-- Sale Price Field -->
<div class="form-group">
    {!! Form::label('sale_price', 'Sale Price:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $item->sale_price !!}</p>
    </div>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $item->description !!}</p>
    </div>
</div>

<!-- Tax Field -->
<div class="form-group">
    {!! Form::label('tax', 'Tax:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $item->tax !!}</p>
    </div>
</div>

<!-- Unit Measure Field -->
<div class="form-group">
    {!! Form::label('unit_measure', 'Unit Measure:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $item->unit_measure !!}</p>
    </div>
</div>

<!-- Unit Price Field -->
<div class="form-group">
    {!! Form::label('unit_price', 'Unit Price:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $item->unit_price !!}</p>
    </div>
</div>

<!-- Initial Amount Field -->
<div class="form-group">
    {!! Form::label('initial_amount', 'Initial Amount:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $item->initial_amount !!}</p>
    </div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $item->created_at !!}</p>
    </div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $item->updated_at !!}</p>
    </div>
</div>

