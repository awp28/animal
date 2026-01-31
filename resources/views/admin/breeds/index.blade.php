@extends('admin.index')

@section('title', 'Zotlar')

@section('content_header')
    <h4>Zotlar</h4>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{{ route('admin.breeds.create') }}" class="btn btn-primary btn-sm float-right">
                            <span class="fas fa-fw fa-plus"></span> Yangi qo'shish
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nomi</th>
                            <th>Kategoriya</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($breeds as $key => $breed)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $breed->name }}</td>
                                <td>{{ $breed->category ? $breed->category->name : '—' }}</td>
                                <td>
                                    <a href="{{ route('admin.breeds.show', $breed) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('admin.breeds.edit', $breed) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('admin.breeds.destroy', $breed) }}" method="post" class="d-inline" onsubmit="return confirm('O\'chirishni xohlaysizmi?')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">Zotlar hali mavjud emas. <a href="{{ route('admin.breeds.create') }}">Yangi qo'shish</a></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
