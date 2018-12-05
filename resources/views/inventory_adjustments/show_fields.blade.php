<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $inventoryAdjustment->id !!}</p>
    </div>
</div>

<!-- Item Id Field -->
<div class="form-group">
    {!! Form::label('item_id', 'Item Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $inventoryAdjustment->item_id !!}</p>
    </div>
</div>

<!-- Adjustment Type Field -->
<div class="form-group">
    {!! Form::label('adjustment_type', 'Adjustment Type:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $inventoryAdjustment->adjustment_type !!}</p>
    </div>
</div>

<!-- Current Amount Field -->
<div class="form-group">
    {!! Form::label('current_amount', 'Current Amount:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $inventoryAdjustment->current_amount !!}</p>
    </div>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $inventoryAdjustment->amount !!}</p>
    </div>
</div>

<!-- Final Amount Field -->
<div class="form-group">
    {!! Form::label('final_amount', 'Final Amount:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $inventoryAdjustment->final_amount !!}</p>
    </div>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $inventoryAdjustment->date !!}</p>
    </div>
</div>

<!-- Observations Field -->
<div class="form-group">
    {!! Form::label('observations', 'Observations:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $inventoryAdjustment->observations !!}</p>
    </div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $inventoryAdjustment->created_at !!}</p>
    </div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $inventoryAdjustment->updated_at !!}</p>
    </div>
</div>

