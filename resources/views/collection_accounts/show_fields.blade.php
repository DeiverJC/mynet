<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $collectionAccount->id !!}</p>
    </div>
</div>

<!-- Contract Id Field -->
<div class="form-group">
    {!! Form::label('contract_id', 'Contract Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $collectionAccount->contract_id !!}</p>
    </div>
</div>

<!-- Creation Field -->
<div class="form-group">
    {!! Form::label('creation', 'Creation:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $collectionAccount->creation !!}</p>
    </div>
</div>

<!-- Expiration Field -->
<div class="form-group">
    {!! Form::label('expiration', 'Expiration:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $collectionAccount->expiration !!}</p>
    </div>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $collectionAccount->total !!}</p>
    </div>
</div>

<!-- Paid Field -->
<div class="form-group">
    {!! Form::label('paid', 'Paid:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $collectionAccount->paid !!}</p>
    </div>
</div>

<!-- To Pay Field -->
<div class="form-group">
    {!! Form::label('to_pay', 'To Pay:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $collectionAccount->to_pay !!}</p>
    </div>
</div>

<!-- State Field -->
<div class="form-group">
    {!! Form::label('state', 'State:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $collectionAccount->state !!}</p>
    </div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $collectionAccount->created_at !!}</p>
    </div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $collectionAccount->updated_at !!}</p>
    </div>
</div>

