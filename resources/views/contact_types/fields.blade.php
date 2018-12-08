<!-- Title Field -->
<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title:', ['class' => 'control-label col-md-3']) !!}
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

<!-- Description Field -->
<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Description:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
        @if ($errors->has('description'))
            <span class="help-block">{{ $errors->first('description') }}</span> 
        @endif
    </div>
</div>

<!-- Submit Field -->
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <a href="{!! route('contactTypes.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>
