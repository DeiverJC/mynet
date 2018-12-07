@extends('layouts.app')

@section('title', 'Editar Contracts')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('contracts.index') }}">
            Contracts
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('contracts.show', $contract->id) }}">
            {{ $contract->id }}
        </a>
    </li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Contract</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
                {!! Form::model($contract, ['route' => ['contracts.update', $contract->id], 
                    'method' => 'patch', 'class' => 'form-horizontal']) !!}

                    @include('contracts.fields')

                {!! Form::close() !!}
        </div>
    </div>
@endsection