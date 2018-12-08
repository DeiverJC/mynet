@extends('layouts.app')

@section('title', 'Editar Items')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('items.index') }}">
            Items
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('items.show', $item->id) }}">
            {{ $item->id }}
        </a>
    </li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Item</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
                {!! Form::model($item, ['route' => ['items.update', $item->id], 
                    'method' => 'patch', 'class' => 'form-horizontal']) !!}

                    @include('items.fields')

                {!! Form::close() !!}
        </div>
    </div>
@endsection