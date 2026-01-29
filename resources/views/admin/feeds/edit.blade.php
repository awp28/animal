@extends('admin.index')

@section('title', 'Feeds')

@section('content_header')
    <h4>Feeds Edit</h4>
@stop

@section('content')
<form action="{{ route('admin.feeds.update', $feed->id) }}" method="post" enctype="multipart/form-data">
    @csrf()
    @method('PUT')
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <!--           Uz             -->
                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" name="title" placeholder="Qo'chqorlar" value="{{ old('title', $feed->title) }}" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <label for="summernote"></label>
                        <textarea class="summernote summer" name="description">
                            {{ old('description', $feed->description ?? '') }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="body">Cost</label>
                        <input class="form-control" name="cost" placeholder="400$" value="{{ old('cost', $feed->cost) }}" required>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Img</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm float-right">&check; {{ __('content.save') }}</button>
        </div>
        <!-- /.card -->
    </div>
</form>

@endsection