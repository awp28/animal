@extends('admin.index')

@section('title', 'Zot qo\'shish')

@section('content_header')
    <h4>Zot qo\'shish</h4>
@stop

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.breeds.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nomi</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required maxlength="100">
                </div>
                <div class="form-group">
                    <label for="category_id">Kategoriya</label>
                    <select class="form-control" name="category_id" id="category_id" required>
                        <option value="">— Tanlang —</option>
                        @foreach($categories as $c)
                            <option value="{{ $c->id }}" {{ old('category_id') == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
                <a href="{{ route('admin.breeds.index') }}" class="btn btn-secondary">Bekor qilish</a>
            </div>
        </div>
    </form>
@endsection
