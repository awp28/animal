@extends('admin.index')

@section('title', 'Animals')

@section('content_header')
    <h4>Animals Create</h4>
@stop

@section('content')
<form action="{{ route('animals.store') }}" method="post" enctype="multipart/form-data">
    @csrf()
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <!--           Uz             -->
                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" name="title" placeholder="Qo'chqorlar">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <label for="summernote"></label>
                        <textarea class="summernote summer" name="description">
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="body">Cost</label>
                        <input class="form-control" name="cost" placeholder="400$">
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