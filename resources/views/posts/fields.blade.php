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

<!-- Body Field -->
<div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
    {!! Form::label('body', 'Body:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body']) !!}
        @if ($errors->has('body'))
            <span class="help-block">{{ $errors->first('body') }}</span> 
        @endif
    </div>
</div>

<!-- Email Field -->
<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
        @if ($errors->has('email'))
            <span class="help-block">{{ $errors->first('email') }}</span> 
        @endif
    </div>
</div>

<!-- Category Field -->
<div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
    {!! Form::label('category', 'Category:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::select('category', ['Technology' => 'Technology', 'LifeStyle' => 'LifeStyle', 'Education' => 'Education', 'Games' => 'Games'], null, ['class' => 'form-control', 'id' => 'category']) !!}
        @if ($errors->has('category'))
            <span class="help-block">{{ $errors->first('category') }}</span> 
        @endif
    </div>
</div>

<!-- Submit Field -->
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>
