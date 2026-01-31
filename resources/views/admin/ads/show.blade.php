@extends('admin.index')

@section('title', 'E\'lon')

@section('content_header')
    <h4>E\'lon: {{ \Illuminate\Support\Str::limit($ad->title, 50) }}</h4>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <p><strong>Sarlavha:</strong> {{ $ad->title }}</p>
                    <p><strong>Foydalanuvchi:</strong> {{ $ad->user ? $ad->user->username : '—' }}</p>
                    <p><strong>Kategoriya:</strong> {{ $ad->category ? $ad->category->name : '—' }}</p>
                    <p><strong>Zot:</strong> {{ $ad->breed ? $ad->breed->name : '—' }}</p>
                    <p><strong>Hudud:</strong> {{ $ad->region ? $ad->region->name : '—' }}</p>
                    <p><strong>Turi:</strong> {{ $ad->type }}</p>
                    <p><strong>Narx:</strong> {{ number_format($ad->price) }} {{ $ad->currency }}</p>
                    <p><strong>Yoshi:</strong> {{ $ad->age ?? '—' }}</p>
                    <p><strong>Jinsi:</strong> {{ $ad->gender ?? '—' }}</p>
                    <p><strong>Vazn:</strong> {{ $ad->weight ?? '—' }}</p>
                    <p><strong>Miqdor:</strong> {{ $ad->quantity ?? '—' }} {{ $ad->unit ?? '' }}</p>
                    <p><strong>Aloqa:</strong> {{ $ad->contact_phone ?? '—' }}</p>
                    <p><strong>Status:</strong> <span class="badge badge-{{ $ad->status === 'active' ? 'success' : 'secondary' }}">{{ $ad->status }}</span></p>
                    <p><strong>Ko'rilgan:</strong> {{ $ad->views ?? 0 }}</p>
                    <p><strong>Tugash sanasi:</strong> {{ $ad->expires_at ? $ad->expires_at->format('d.m.Y H:i') : '—' }}</p>
                    <p><strong>Tavsif:</strong></p>
                    <div class="border p-2 bg-light">{{ $ad->description }}</div>
                    @if($ad->attributes->isNotEmpty())
                        <p class="mt-2"><strong>Atributlar:</strong></p>
                        <ul class="list-unstyled">
                            @foreach($ad->attributes as $attr)
                                <li><strong>{{ $attr->key }}:</strong> {{ $attr->value }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="col-md-4">
                    @if($ad->getMedia('images')->isNotEmpty())
                        <p><strong>Rasmlar:</strong></p>
                        @foreach($ad->getMedia('images') as $media)
                            <div class="mb-2">
                                <img src="{{ $media->getUrl() }}" alt="" class="img-fluid rounded" style="max-height:150px" onerror="this.style.display='none'">
                            </div>
                        @endforeach
                    @else
                        <p>Rasmlar yo'q</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.ads.edit', $ad) }}" class="btn btn-warning">Tahrirlash</a>
            <a href="{{ route('admin.ads.index') }}" class="btn btn-secondary">Orqaga</a>
        </div>
    </div>
@endsection
