@extends('app.layout')
@section('title', 'Create')
@section('content')
    <div class="container">
        <div class="row pt-3 justify-content-center">
            <form method="POST" action="{{ route('todo.create') }}" enctype="multipart/form-data">
                @csrf
                @include('_erorr')
                <div class="form-row">
                    <div class="col">
                        <input name="title" type="text"  class="form-control" placeholder="Title">
                        <br>
                        <textarea name="desc" class="form-control" placeholder="My Tasks" cols="30"
                            rows="5">{{ old('desc') }}</textarea>
                        <button type="submit" class="btn btn-primary btn-sm btn-block">Create New Taske</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
