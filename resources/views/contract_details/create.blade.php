@extends('layouts.app')

@section('title', 'Registrar Contract Details')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('contractDetails.index') }}">
            Contract Details
        </a>
    </li>
    <li class="breadcrumb-item active">Register</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Contract Detail</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
            {!! Form::open(['route' => 'contractDetails.store', 'class' => 'form-horizontal']) !!}

                @include('contract_details.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
