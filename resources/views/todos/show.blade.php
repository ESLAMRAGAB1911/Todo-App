@extends('app.layout')
@section('title', 'show'.' ' . $todos->id)
@section('content')
    <div class="container">
        <h1 class="mt-5 text-center">
            {{ $todos->title }}
        </h1>
        <br>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>
                        Details
                    </span>
                    @if ($todos->status)
                    <span class="badge badge-warning float-right">
                        Completed
                    </span>
                    @else
                    <span class="badge badge-danger float-right">
                       Non Completed
                    </span>
                    @endif
                    
                </div>
                <div class="card-body">
                    {{ $todos->desc }}
                </div>
            </div>
        </div>
    </div>
@endsection
