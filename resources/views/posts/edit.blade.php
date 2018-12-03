@extends('layouts.app')

@section('title', 'Editar Posts')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('posts.index') }}">
            Posts
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('posts.show', $post->id) }}">
            {{ $post->id }}
        </a>
    </li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Post</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
                {!! Form::model($post, ['route' => ['posts.update', $post->id], 
                    'method' => 'patch', 'class' => 'form-horizontal']) !!}

                    @include('posts.fields')

                {!! Form::close() !!}
        </div>
    </div>
@endsection