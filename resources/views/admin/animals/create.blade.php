@extends('admin.index')

@section('title', 'Animals')

@section('content_header')
    <h4>Animals Create</h4>
@stop

@section('content')
<form action="{{ route('admin.animals.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <!-- Uz -->
                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                    <!-- Title -->
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" name="title" placeholder="Qo'chqorlar" required>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control summernote" name="description" id="description"></textarea>
                    </div>

                    <!-- Cost -->
                    <div class="form-group">
                        <label for="cost">Cost</label>
                        <input class="form-control" name="cost" placeholder="400$" required>
                    </div>

                    <!-- Image -->
                    <div class="form-group">
                        <label for="image">Img</label>
                        <input class="form-control" type="file" name="image" id="image" accept="image/*">
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary btn-sm float-right">&check; Save</button>
        </div>
    </div>
</form>
@endsection
