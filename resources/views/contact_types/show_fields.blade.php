<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contactType->id !!}</p>
    </div>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contactType->title !!}</p>
    </div>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contactType->description !!}</p>
    </div>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contactType->created_at !!}</p>
    </div>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        <p class="form-control-static">{!! $contactType->updated_at !!}</p>
    </div>
</div>

