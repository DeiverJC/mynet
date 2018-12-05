@extends('layouts.app')

@section('title', 'Registrar Articles')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('articles.index') }}">
            Articles
        </a>
    </li>
    <li class="breadcrumb-item active">Register</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Article</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
            {!! Form::open(['route' => 'articles.store', 'class' => 'form-horizontal']) !!}

                @include('articles.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
