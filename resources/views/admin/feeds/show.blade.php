@extends('admin.index')

@section('title', 'Feeds')

@section('content_header')
    <h4>Feeds Show</h4>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID:</strong>{{ $feed->id}}</li>
                <li class="list-group-item">
                    @if($feed->img)
                    <img src="{{ asset('storage/'.$feed->img) }}" width="200" />
                    @endif
                </li>
                <li class="list-group-item"><strong>Title:</strong>{{ $feed->title}}</li>
                <li class="list-group-item"><strong>Description:</strong>{{ $feed->description}}</li>
                <li class="list-group-item"><strong>Cost:</strong>{{ $feed->cost}}$</li>
            </ul>
        </div>
    </div>
</div>

@endsection