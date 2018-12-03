@extends('layouts.app')

@section('title', 'Posts')

@section('breadcrumb')
    <li class="active">Posts</li>
@endsection

@section('content')

    @include('flash::message')

    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">
                Posts
                <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('posts.create') !!}">
                    Agregar nuevo
                </a>
            </h3>
            <p class="text-muted m-b-30">Lorem ipsum ..</p>
            <div class="table-responsive">
                @include('posts.table')
            </div>
            <div class="text-center">
                
            </div>
        </div>
    </div>

@endsection

