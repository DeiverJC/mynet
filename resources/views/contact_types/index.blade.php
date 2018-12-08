@extends('layouts.app')

@section('title', 'Contact Types')

@section('breadcrumb')
    <li class="active">Contact Types</li>
@endsection

@section('content')

    @include('flash::message')

    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">
                Contact Types
                <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('contactTypes.create') !!}">
                    Agregar nuevo
                </a>
            </h3>
            <p class="text-muted m-b-30">Lorem ipsum ..</p>
            <div class="table-responsive">
                @include('contact_types.table')
            </div>
            <div class="text-center">
                
            </div>
        </div>
    </div>

@endsection

