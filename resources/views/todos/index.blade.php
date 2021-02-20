@extends('app.layout')
@section('title', 'index')
@section('content')

    <div class="container">
        <div class="row pt-3 justify-content-center">
            <div class="card" style="width:70%">
                <div class="card-header text-center">
                    <h1>All Tasks</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse ($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->title }}
                                <span class="float-right">
                                    @if ($todo->status)
                                        <a class="badge badge-warning float-right" style="margin: 7px" 
                                        href="{{ route('todo.status2', $todo->id) }}">Complete</a>

                                    @else
                                        <a class="badge badge-danger float-right"  style="margin: 7px"
                                            href="{{ route('todo.status', $todo->id) }}">Non Complete</a>
                                    @endif
                                    <a class="btn btn-primary btn-sm" href="{{ route('todo.show', $todo->id) }}">Show</a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('todo.edit', $todo->id) }}">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('todo.delete', $todo->id) }}">Delete</a>
                                </span>
                            </li>

                        @empty
                            <h1 style="text-align: center">Not Found</h1>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
