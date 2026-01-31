@extends('admin.index')

@section('title', 'Zot')

@section('content_header')
    <h4>Zot: {{ $breed->name }}</h4>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>Nomi:</strong> {{ $breed->name }}</p>
            <p><strong>Kategoriya:</strong> {{ $breed->category ? $breed->category->name : '—' }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.breeds.edit', $breed) }}" class="btn btn-warning">Tahrirlash</a>
            <a href="{{ route('admin.breeds.index') }}" class="btn btn-secondary">Orqaga</a>
        </div>
    </div>
@endsection
