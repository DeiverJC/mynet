@extends('layouts.app')

@section('title', 'Editar Contact Types')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('contactTypes.index') }}">
            Contact Types
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('contactTypes.show', $contactType->id) }}">
            {{ $contactType->id }}
        </a>
    </li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Contact Type</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
                {!! Form::model($contactType, ['route' => ['contactTypes.update', $contactType->id], 
                    'method' => 'patch', 'class' => 'form-horizontal']) !!}

                    @include('contact_types.fields')

                {!! Form::close() !!}
        </div>
    </div>
@endsection