@extends('layouts.app')

@section('title', 'Registrar Contacts')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('contacts.index') }}">
            Contacts
        </a>
    </li>
    <li class="breadcrumb-item active">Register</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Contact</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
            {!! Form::open(['route' => 'contacts.store', 'class' => 'form-horizontal']) !!}

                @include('contacts.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
