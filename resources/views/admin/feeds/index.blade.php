@extends('admin.index')

@section('title', 'Feeds')

@section('content_header')
    <h4>Feeds</h4>
@stop

@section('content')

<div class="card">
    <!-- CARD HEADER -->
    <div class="card-header d-flex justify-content-between align-items-center">

        <a href="{{ route('admin.feeds.create') }}"
                class="btn btn-primary btn-sm mr-2">
            <span class="fas fa-plus"></span>
             Янги яратиш
        </a>
    </div>

    <!-- CARD BODY -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Img</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Cost</th>
                        <th width="180">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($feeds as $feed)
                        <tr>
                            <td>{{ $feed->id }}</td>
                            <td>
                                @if($feed->img)
                                    <img src="{{ asset('storage/'.$feed->img) }}" width="120" class="img-thumbnail">
                                @else
                                    <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.feeds.show', $feed->id) }}">
                                    {{ $feed->title }}
                                </a>
                            </td>
                            <td>{{ Str::limit($feed->description, 50) }}</td>
                            <td>{{ number_format($feed->cost, 2) }} $</td>
                            <td>
                                <a href="{{ route('admin.feeds.show', $feed->id) }}"
                                   class="btn btn-info btn-sm">View</a>

                                <a href="{{ route('admin.feeds.edit', $feed->id) }}"
                                   class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('admin.feeds.destroy', $feed->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">
                                No data found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-between align-items-center mt-3">
            <small class="text-muted">
                Showing {{ $feeds->firstItem() }} - {{ $feeds->lastItem() }}
                of {{ $feeds->total() }}
            </small>

            {{ $feeds->links() }}
        </div>
    </div>
</div>



@endsection