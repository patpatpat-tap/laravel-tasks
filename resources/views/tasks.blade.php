@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white text-center" style="font-size:2rem; font-weight:bold;">
                        Transformers Database
                    </div>
                    <div class="card-body">
                        <!-- Search Form -->
                        <form method="GET" action="/" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search Transformers by name or description..." value="{{ $search }}">
                                <button class="btn btn-danger" type="submit">Search</button>
                            </div>
                        </form>
                        @if(count($tasks) > 0)
                            <div class="row">
                                @foreach($tasks as $task)
                                    <div class="col-md-4 mb-4">
                                        <div class="card h-100 shadow-sm border-danger">
                                            <img src="{{ asset('images/' . $task->image) }}" class="card-img-top" alt="{{ $task->name }}" style="height:250px; object-fit:cover; background:#222;">
                                            <div class="card-body">
                                                <h5 class="card-title" style="font-weight:bold; color:#d32f2f;">{{ $task->name }}</h5>
                                                <p class="card-text">{{ $task->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="alert alert-warning text-center">No Transformers found.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
