@extends('layouts.app')

@section('title', 'Items')

@section('breadcrumb')
    <li class="active">Items</li>
@endsection

@section('content')

    @include('flash::message')

    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">
                Items
                <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('items.create') !!}">
                    Agregar nuevo
                </a>
            </h3>
            <p class="text-muted m-b-30">Lorem ipsum ..</p>
            <div class="table-responsive">
                @include('items.table')
            </div>
            <div class="text-center">
                
            </div>
        </div>
    </div>

@endsection

