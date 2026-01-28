@extends('admin.index')

@section('title', 'AgriTech')

@section('content_header')
    <h4>AgriTech List</h4>
@stop

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <a href="{{ route('admin.agritech.create') }}" class="btn btn-primary btn-sm">
            <span class="fas fa-plus"></span> New AgriTech
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
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
                    @forelse ($agritech as $item)
                        <tr>
                            <td>{{ $item->id }}</td>

                            {{-- IMAGE (clickable) --}}
                            <td>
                                <a href="{{ route('admin.agritech.show', $item->id) }}">
                                    @if($item->img)
                                        <img src="{{ asset('storage/'.$item->img) }}"
                                             width="120"
                                             class="img-thumbnail">
                                    @else
                                        <span class="text-muted">No image</span>
                                    @endif
                                </a>
                            </td>

                            {{-- TITLE (clickable) --}}
                            <td>
                                <a href="{{ route('admin.agritech.show', $item->id) }}"
                                   class="fw-bold text-dark text-decoration-none">
                                    {{ $item->title }}
                                </a>
                            </td>

                            {{-- DESCRIPTION (clickable, html clean) --}}
                            <td>
                                <a href="{{ route('admin.agritech.show', $item->id) }}"
                                   class="text-muted text-decoration-none">
                                    {{ Str::limit(strip_tags($item->description), 60) }}
                                </a>
                            </td>

                            {{-- COST with badge --}}
                            <td>
                                <span class="badge bg-success">
                                    $ {{ number_format($item->cost, 2) }}
                                </span>
                            </td>

                            {{-- ACTIONS --}}
                            <td>
                                <a href="{{ route('admin.agritech.show', $item->id) }}"
                                   class="btn btn-info btn-sm">
                                    View
                                </a>

                                <a href="{{ route('admin.agritech.edit', $item->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('admin.agritech.destroy', $item->id) }}"
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

        {{-- PAGINATION --}}
        <div class="d-flex justify-content-between align-items-center mt-3">
            <small class="text-muted">
                Showing {{ $agritech->firstItem() }} - {{ $agritech->lastItem() }}
                of {{ $agritech->total() }}
            </small>
            {{ $agritech->links() }}
        </div>
    </div>
</div>
@stop
