@extends('admin.index')

@section('title', 'Hududni tahrirlash')

@section('content_header')
    <h4>Hududni tahrirlash</h4>
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

    <form action="{{ route('admin.regions.update', $region) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nomi</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $region->name) }}" required maxlength="100">
                </div>
                <div class="form-group">
                    <label for="parent_id">Viloyat (ustun)</label>
                    <select class="form-control" name="parent_id" id="parent_id">
                        <option value="">— Tanlang —</option>
                        @foreach($parents as $p)
                            <option value="{{ $p->id }}" {{ old('parent_id', $region->parent_id) == $p->id ? 'selected' : '' }}>{{ $p->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
                <a href="{{ route('admin.regions.index') }}" class="btn btn-secondary">Bekor qilish</a>
            </div>
        </div>
    </form>
@endsection
