<!-- Start Date Field -->
<div class="form-group {{ $errors->has('start_date') ? ' has-error' : '' }}">
    {!! Form::label('start_date', 'Start Date:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::date('start_date', null, ['class' => 'form-control', 'id' => 'start_date']) !!}
        @if ($errors->has('start_date'))
            <span class="help-block">{{ $errors->first('start_date') }}</span> 
        @endif
    </div>
</div>

<!-- Finish Date Field -->
<div class="form-group {{ $errors->has('finish_date') ? ' has-error' : '' }}">
    {!! Form::label('finish_date', 'Finish Date:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::date('finish_date', null, ['class' => 'form-control', 'id' => 'finish_date']) !!}
        @if ($errors->has('finish_date'))
            <span class="help-block">{{ $errors->first('finish_date') }}</span> 
        @endif
    </div>
</div>

<!-- Term Payment Field -->
<div class="form-group {{ $errors->has('term_payment') ? ' has-error' : '' }}">
    {!! Form::label('term_payment', 'Term Payment:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::select('term_payment', ['15 dias' => '15 dias', '30 dias' => '30 dias', '60 dias' => '60 dias', 'Manual' => 'Manual'], null, ['class' => 'form-control', 'id' => 'term_payment']) !!}
        @if ($errors->has('term_payment'))
            <span class="help-block">{{ $errors->first('term_payment') }}</span> 
        @endif
    </div>
</div>

<!-- Contact Id Field -->
<div class="form-group {{ $errors->has('contact_id') ? ' has-error' : '' }}">
    {!! Form::label('contact_id', 'Contact Id:', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('contact_id', null, [
            'class' => 'form-control', 
            'id' => 'contact_id', 
            'placeholder' => 'Contact Id'
        ]) !!}
        @if ($errors->has('contact_id'))
            <span class="help-block">{{ $errors->first('contact_id') }}</span> 
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
