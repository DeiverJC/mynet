<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->id !!}</p>
    </div>
</div>

<!-- Contact Id Field -->
<div class="form-group">
    {!! Form::label('contact_id', 'Contact Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->contact_id !!}</p>
    </div>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->start_date !!}</p>
    </div>
</div>

<!-- Finish Date Field -->
<div class="form-group">
    {!! Form::label('finish_date', 'Finish Date:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->finish_date !!}</p>
    </div>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->status !!}</p>
    </div>
</div>

<!-- Payment Term Field -->
<div class="form-group">
    {!! Form::label('payment_term', 'Payment Term:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contract->payment_term !!}</p>
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

