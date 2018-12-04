@extends('layouts.app')

@section('title', 'Editar Contacts')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('contacts.index') }}">
            Contacts
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('contacts.show', $contact->id) }}">
            {{ $contact->id }}
        </a>
    </li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Contact</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
                {!! Form::model($contact, ['route' => ['contacts.update', $contact->id], 
                    'method' => 'patch', 'class' => 'form-horizontal']) !!}

                    @include('contacts.fields')

                {!! Form::close() !!}
        </div>
    </div>
@endsection