@extends('app.layout')
@section('title', 'Edit')
@section('content')
    <div class="container">
        <div class="row pt-3 justify-content-center">
            <form method="POST" action="{{ route('todo.update', $todos->id) }}" enctype="multipart/form-data">
                @csrf
                @include('_erorr')
                <div class="form-row">
                    <div class="col">
                        <input name="title" type="text" value="{{ $todos->title }}" class="form-control" placeholder="Title">
                        <br>
                        <textarea name="desc" class="form-control" placeholder="My Tasks" cols="30"
                            rows="5">{{ $todos->desc }}</textarea>
                        <button type="submit" class="btn btn-primary btn-sm btn-block">Update Taske</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
