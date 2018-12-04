@extends('layouts.app')

@section('title', 'Registrar Contracts')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('contracts.index') }}">
            Contracts
        </a>
    </li>
    <li class="breadcrumb-item active">Register</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Contract</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
            {!! Form::open(['route' => 'contracts.store', 'class' => 'form-horizontal']) !!}

                @include('contracts.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
