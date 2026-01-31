@extends('admin.index')

@section('title', 'Hudud')

@section('content_header')
    <h4>Hudud: {{ $region->name }}</h4>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>Nomi:</strong> {{ $region->name }}</p>
            <p><strong>Viloyat (ustun):</strong> {{ $region->parent ? $region->parent->name : '—' }}</p>
            @if($region->children->isNotEmpty())
                <p><strong>Tumanlar:</strong></p>
                <ul>
                    @foreach($region->children as $child)
                        <li>{{ $child->name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.regions.edit', $region) }}" class="btn btn-warning">Tahrirlash</a>
            <a href="{{ route('admin.regions.index') }}" class="btn btn-secondary">Orqaga</a>
        </div>
    </div>
@endsection
