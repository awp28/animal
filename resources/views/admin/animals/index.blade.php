@extends('admin.index')

@section('title', 'Animals')

@section('content_header')
    <h4>Animals</h4>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <a href="{{ route('animals.create') }}" class="btn btn-primary btn-sm float-right">
                        <span class="fas fa-fw fa-plus"></span>Янги яратиш
                    </a>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Img</th>
                            <th>Title</th>
                            <th>description</th>
                            <th>cost</th>
                            <th>$$$</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animals as $animal)
                            <tr>
                                <td>{{$animal->id}}</td>
                                <td>
                                    @if($animal->img)
                                        <img src="{{ asset('storage/'.$animal->img) }}" width="200" />
                                    @endif
                                </td>
                                <td><a href="{{ route('animals.show', $animal->id) }}">{{$animal->title}}</a></td>
                                <td>{{$animal->description}}</td>
                                <td>{{$animal->cost}}$</td>
                                <td>
                                    <a href="{{ route('animals.show', $animal->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('animals.edit', $animal->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('animals.destroy', $animal->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure?')">Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection