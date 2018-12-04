@extends('layouts.app')

@section('title', 'Editar Type Contacts')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('typeContacts.index') }}">
            Type Contacts
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('typeContacts.show', $typeContact->id) }}">
            {{ $typeContact->id }}
        </a>
    </li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Type Contact</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
                {!! Form::model($typeContact, ['route' => ['typeContacts.update', $typeContact->id], 
                    'method' => 'patch', 'class' => 'form-horizontal']) !!}

                    @include('type_contacts.fields')

                {!! Form::close() !!}
        </div>
    </div>
@endsection