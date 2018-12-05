@extends('layouts.app')

@section('title', 'Ver Article Types')

@section('breadcrumb')
    <li class="breadcrumb-item "><a href="{{ route('articleTypes.index') }}">Article Types</a></li>
    <li class="breadcrumb-item active">{{ $articleType->id }}</li>
@endsection  

@section('content')
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Article Type</h3>
            <p class="text-muted m-b-30 font-13"> Lorem ipsum ... </p>
            <form class="form-horizontal" role="form">
                <div class="form-body">
                    
                    <div class="row">
                        <div class="col-md-6">
                            @include('article_types.show_fields')
                        </div>
                    </div>

                </div>

                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-info"> <i class="fa fa-pencil"></i> Edit</button>
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
