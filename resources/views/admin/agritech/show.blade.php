@extends('admin.index')

@section('title', 'AgriTech')

@section('content_header')
    <h4>AgriTech Show</h4>
@stop

@section('content')

<div class="row">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID:</strong> {{ $item->id }}</li>

                <li class="list-group-item">
                    @if($item->img)
                        <img src="{{ asset('storage/'.$item->img) }}" width="200" class="img-thumbnail" />
                    @else
                        <span class="text-muted">No image</span>
                    @endif
                </li>

                <li class="list-group-item"><strong>Title:</strong> {{ $item->title }}</li>
                <li class="list-group-item"><strong>Description:</strong> {{ $item->description }}</li>
                <li class="list-group-item"><strong>Cost:</strong> {{ number_format($item->cost, 2) }} $</li>
            </ul>
            <div class="card-body">
                <a href="{{ route('admin.agritech.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{ route('admin.agritech.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection
