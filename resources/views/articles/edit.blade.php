@extends('layouts.app')

@section('title', 'Editar Articles')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('articles.index') }}">
            Articles
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('articles.show', $article->id) }}">
            {{ $article->id }}
        </a>
    </li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Article</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
                {!! Form::model($article, ['route' => ['articles.update', $article->id], 
                    'method' => 'patch', 'class' => 'form-horizontal']) !!}

                    @include('articles.fields')

                {!! Form::close() !!}
        </div>
    </div>
@endsection