@extends('admin.index')

@section('title', 'Kategoriya')

@section('content_header')
    <h4>Kategoriya: {{ $category->name }}</h4>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>Nomi:</strong> {{ $category->name }}</p>
            <p><strong>Ustun kategoriya:</strong> {{ $category->parent ? $category->parent->name : '—' }}</p>
            @if($category->children->isNotEmpty())
                <p><strong>Pastki kategoriyalar:</strong></p>
                <ul>
                    @foreach($category->children as $child)
                        <li>{{ $child->name }}</li>
                    @endforeach
                </ul>
            @endif
            @if($category->breeds->isNotEmpty())
                <p><strong>Zotlar:</strong></p>
                <ul>
                    @foreach($category->breeds as $breed)
                        <li>{{ $breed->name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning">Tahrirlash</a>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Orqaga</a>
        </div>
    </div>
@endsection
