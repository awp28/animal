@extends('admin.index')

@section('title', 'Animals')

@section('content_header')
    <h4>Animals Show</h4>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID:</strong> {{ $animal->id }}</li>
                <li class="list-group-item">
                    @if($animal->img)
                        <img src="{{ asset('storage/'.$animal->img) }}" width="200" />
                    @else
                        <span class="text-muted">No image</span>
                    @endif
                </li>
                <li class="list-group-item"><strong>Title:</strong> {{ $animal->title }}</li>
                <li class="list-group-item"><strong>Description:</strong> {{ $animal->description }}</li>
                <li class="list-group-item"><strong>Cost:</strong> {{ $animal->cost }}$</li>
            </ul>
            <div class="card-body mt-2">
                <a href="{{ route('admin.animals.edit', $animal->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{ route('admin.animals.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection
