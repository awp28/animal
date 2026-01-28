@extends('admin.index')

@section('title', 'AgriTech')

@section('content_header')
    <h4>AgriTech Edit</h4>
@stop

@section('content')
<form action="{{ route('admin.agritech.update', $item->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <!-- Uz -->
                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" name="title" placeholder="Masalan: Traktor" 
                               value="{{ old('title', $item->title) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="summernote summer" name="description">
                            {{ old('description', $item->description ?? '') }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="cost">Cost</label>
                        <input class="form-control" name="cost" placeholder="400$" 
                               value="{{ old('cost', $item->cost) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="img">Img</label>
                        <input class="form-control" type="file" name="img" id="img">
                        @if($item->img)
                            <img src="{{ asset('storage/' . $item->img) }}" 
                                 width="120" class="img-thumbnail mt-2" alt="Current Image">
                        @endif
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-sm float-right">
                &check; {{ __('content.save') }}
            </button>
        </div>
        <!-- /.card-body -->
    </div>
</form>
@endsection
