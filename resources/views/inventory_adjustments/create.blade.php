@extends('layouts.app')

@section('title', 'Registrar Inventory Adjustments')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('inventoryAdjustments.index') }}">
            Inventory Adjustments
        </a>
    </li>
    <li class="breadcrumb-item active">Register</li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Inventory Adjustment</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
            {!! Form::open(['route' => 'inventoryAdjustments.store', 'class' => 'form-horizontal']) !!}

                @include('inventory_adjustments.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
