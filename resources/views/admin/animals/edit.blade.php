@extends('admin.index')

@section('title', 'Animals')

@section('content_header')
    <h4>Animals Edit</h4>
@stop

@section('content')
<form action="{{ route('animals.update', $animal->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <!-- Uz -->
                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" name="title" placeholder="Qo'chqorlar" value="{{ old('title', $animal->title) }}" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="summernote summer" name="description">"{{ old('description', $animal->description) }}"</textarea>
                    </div>
                    <div class="form-group">
                        <label for="cost">Cost</label>
                        <input class="form-control" name="cost" placeholder="400$" value="{{ old('cost', $animal->cost) }}" required>
                    </div>
                    <div class="form-group">
                        <label>Img</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm float-right">&check; {{ __('content.save') }}</button>
        </div>
    </div>
</form>
6

@endsection