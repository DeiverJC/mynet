<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
            {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
            <div class="input-group-addon"><i class="ti-user"></i></div>
        </div>
    </div>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
            {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body']) !!}
            <div class="input-group-addon"><i class="ti-email"></i></div>
        </div>
    </div>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
            {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
            <div class="input-group-addon"><i class="ti-email"></i></div>
        </div>
    </div>
</div>

<!-- Category Field -->
<div class="form-group">
    {!! Form::label('category', 'Category:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="input-group">
            {!! Form::select('category', ['Technology' => 'Technology', 'LifeStyle' => 'LifeStyle', 'Education' => 'Education', 'Games' => 'Games'], null, ['class' => 'form-control', 'id' => 'category']) !!}
            <div class="input-group-addon"><i class="ti-user"></i></div>
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group m-b-0">
    <div class="col-sm-offset-3 col-sm-9 text-right">
        <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    </div>
</div>
