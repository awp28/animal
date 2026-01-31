@extends('admin.index')

@section('title', 'E\'lonni tahrirlash')

@section('content_header')
    <h4>E\'lonni tahrirlash</h4>
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

    <form action="{{ route('admin.ads.update', $ad) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user_id">Foydalanuvchi</label>
                            <select class="form-control" name="user_id" id="user_id" required>
                                @foreach($users as $u)
                                    <option value="{{ $u->id }}" {{ old('user_id', $ad->user_id) == $u->id ? 'selected' : '' }}>{{ $u->username ?? $u->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Kategoriya</label>
                            <select class="form-control" name="category_id" id="category_id" required>
                                @foreach($categories as $c)
                                    <option value="{{ $c->id }}" {{ old('category_id', $ad->category_id) == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="breed_id">Zot</label>
                            <select class="form-control" name="breed_id" id="breed_id">
                                <option value="">— Tanlang —</option>
                                @foreach($breeds as $b)
                                    <option value="{{ $b->id }}" {{ old('breed_id', $ad->breed_id) == $b->id ? 'selected' : '' }}>{{ $b->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="region_id">Hudud</label>
                            <select class="form-control" name="region_id" id="region_id" required>
                                @foreach($regions as $r)
                                    <option value="{{ $r->id }}" {{ old('region_id', $ad->region_id) == $r->id ? 'selected' : '' }}>{{ $r->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Sarlavha</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $ad->title) }}" required maxlength="200">
                        </div>
                        <div class="form-group">
                            <label for="type">Turi</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{ old('type', $ad->type) }}" maxlength="100">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="price">Narx</label>
                                    <input type="number" step="0.01" class="form-control" name="price" id="price" value="{{ old('price', $ad->price) }}" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="currency">Valyuta</label>
                                    <input type="text" class="form-control" name="currency" id="currency" value="{{ old('currency', $ad->currency) }}" maxlength="10">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="age">Yoshi</label>
                                    <input type="text" class="form-control" name="age" id="age" value="{{ old('age', $ad->age) }}" maxlength="50">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="gender">Jinsi</label>
                                    <input type="text" class="form-control" name="gender" id="gender" value="{{ old('gender', $ad->gender) }}" maxlength="20">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="weight">Vazn</label>
                                    <input type="number" step="0.01" class="form-control" name="weight" id="weight" value="{{ old('weight', $ad->weight) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="quantity">Miqdor</label>
                                    <input type="number" step="0.01" class="form-control" name="quantity" id="quantity" value="{{ old('quantity', $ad->quantity) }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="unit">Birlik</label>
                                    <input type="text" class="form-control" name="unit" id="unit" value="{{ old('unit', $ad->unit) }}" maxlength="50">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact_phone">Aloqa telefoni</label>
                            <input type="text" class="form-control" name="contact_phone" id="contact_phone" value="{{ old('contact_phone', $ad->contact_phone) }}" maxlength="20">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="active" {{ old('status', $ad->status) === 'active' ? 'selected' : '' }}>active</option>
                                <option value="inactive" {{ old('status', $ad->status) === 'inactive' ? 'selected' : '' }}>inactive</option>
                                <option value="moderation" {{ old('status', $ad->status) === 'moderation' ? 'selected' : '' }}>moderation</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="expires_at">Tugash sanasi</label>
                            <input type="datetime-local" class="form-control" name="expires_at" id="expires_at" value="{{ old('expires_at', $ad->expires_at ? $ad->expires_at->format('Y-m-d\TH:i') : '') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Tavsif</label>
                            <textarea class="form-control" name="description" id="description" rows="6" required>{{ old('description', $ad->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Mavjud rasmlar</label>
                            @if($ad->getMedia('images')->isNotEmpty())
                                <div class="d-flex flex-wrap gap-2 mb-2">
                                    @foreach($ad->getMedia('images') as $media)
                                        <img src="{{ $media->getUrl() }}" alt="" class="img-thumbnail" style="max-height: 80px;">
                                    @endforeach
                                </div>
                            @else
                                <p class="text-muted small">Rasmlar yo'q</p>
                            @endif
                            <label class="mt-2">Yangi rasmlar (eski rasmlar yangilari bilan almashtiriladi)</label>
                            <input type="file" class="form-control-file" name="images[]" accept="image/jpeg,image/png,image/gif,image/webp" multiple>
                            <small class="text-muted">Rasm tanlasangiz, eski rasmlar o'chiriladi va tanlangan yangi rasmlar saqlanadi. Bo'sh qoldirsangiz — eski rasmlar o'zgarishsiz qoladi.</small>
                        </div>
                        <div class="form-group">
                            <label>Qo'shimcha atributlar</label>
                            <div id="attrs">
                                @forelse($ad->attributes as $attr)
                                    <div class="row mb-1">
                                        <div class="col-5"><input type="text" class="form-control" name="attr_keys[]" value="{{ $attr->key }}" placeholder="Kalit"></div>
                                        <div class="col-5"><input type="text" class="form-control" name="attr_values[]" value="{{ $attr->value }}" placeholder="Qiymat"></div>
                                    </div>
                                @empty
                                    <div class="row mb-1">
                                        <div class="col-5"><input type="text" class="form-control" name="attr_keys[]" placeholder="Kalit"></div>
                                        <div class="col-5"><input type="text" class="form-control" name="attr_values[]" placeholder="Qiymat"></div>
                                    </div>
                                @endforelse
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary mt-1" id="add_attr">+ Atribut qo'shish</button>
                        </div>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Saqlash</button>
                <a href="{{ route('admin.ads.index') }}" class="btn btn-secondary">Bekor qilish</a>
            </div>
        </div>
    </form>

    <script>
        document.getElementById('add_attr').onclick = function() {
            var row = document.createElement('div');
            row.className = 'row mb-1';
            row.innerHTML = '<div class="col-5"><input type="text" class="form-control" name="attr_keys[]" placeholder="Kalit"></div><div class="col-5"><input type="text" class="form-control" name="attr_values[]" placeholder="Qiymat"></div><div class="col-2"></div>';
            document.getElementById('attrs').appendChild(row);
        };
    </script>
@endsection
