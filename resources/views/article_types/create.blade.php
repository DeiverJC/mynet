@extends('layouts.app')

@section('title', 'Registrar Article Types')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('articleTypes.index') }}">
            Article Types
        </a>
    </li>
    <li class="breadcrumb-item active">Register</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Article Type</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
            {!! Form::open(['route' => 'articleTypes.store', 'class' => 'form-horizontal']) !!}

                @include('article_types.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
