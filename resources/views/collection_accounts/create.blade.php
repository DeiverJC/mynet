@extends('layouts.app')

@section('title', 'Registrar Collection Accounts')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('collectionAccounts.index') }}">
            Collection Accounts
        </a>
    </li>
    <li class="breadcrumb-item active">Register</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Collection Account</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
            {!! Form::open(['route' => 'collectionAccounts.store', 'class' => 'form-horizontal']) !!}

                @include('collection_accounts.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
