@extends('front.layouts.main')

@section('content')

    @include('front.layouts.includes.nav')

    <div class="container py-5 my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('animals') }}">E'lonlar</a></li>
                <li class="breadcrumb-item active">{{ \Illuminate\Support\Str::limit($ad->title, 40) }}</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <h1 class="h3 mb-3">{{ $ad->title }}</h1>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            @if($ad->category)
                                <span class="badge bg-primary">{{ $ad->category->name }}</span>
                            @endif
                            @if($ad->region)
                                <span class="badge bg-secondary">{{ $ad->region->name }}</span>
                            @endif
                            @if($ad->breed)
                                <span class="badge bg-info">{{ $ad->breed->name }}</span>
                            @endif
                            <span class="badge bg-success">{{ $ad->type ?? 'Sotuv' }}</span>
                        </div>
                        <p class="text-muted small mb-0">
                            <i class="far fa-eye"></i> {{ $ad->views ?? 0 }} ko'rilgan
                            @if($ad->expires_at)
                                · Tugash: {{ $ad->expires_at->format('d.m.Y') }}
                            @endif
                        </p>
                    </div>
                </div>

                @if($ad->getMedia('images')->isNotEmpty())
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Rasmlar</h5>
                            <div class="row g-2">
                                @foreach($ad->getMedia('images') as $media)
                                    <div class="col-6 col-md-4">
                                        <img src="{{ $media->getUrl() }}" alt="" class="img-fluid rounded" style="max-height: 200px; object-fit: cover; width: 100%;" onerror="this.style.display='none'">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Tavsif</h5>
                        <p class="card-text">{{ $ad->description }}</p>
                    </div>
                </div>

                @if($ad->attributes->isNotEmpty())
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Qo'shimcha ma'lumotlar</h5>
                            <dl class="row mb-0">
                                @foreach($ad->attributes as $attr)
                                    <dt class="col-sm-4">{{ $attr->key }}</dt>
                                    <dd class="col-sm-8">{{ $attr->value }}</dd>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                @endif
            </div>

            <div class="col-lg-4">
                <div class="card sticky-top">
                    <div class="card-body">
                        <h4 class="text-success mb-3">{{ number_format($ad->price) }} {{ $ad->currency }}</h4>
                        @if($ad->age)
                            <p class="mb-1"><strong>Yoshi:</strong> {{ $ad->age }}</p>
                        @endif
                        @if($ad->gender)
                            <p class="mb-1"><strong>Jinsi:</strong> {{ $ad->gender }}</p>
                        @endif
                        @if($ad->weight)
                            <p class="mb-1"><strong>Vazn:</strong> {{ $ad->weight }} kg</p>
                        @endif
                        @if($ad->quantity)
                            <p class="mb-1"><strong>Miqdor:</strong> {{ $ad->quantity }} {{ $ad->unit ?? '' }}</p>
                        @endif
                        @if($ad->contact_phone)
                            <p class="mb-2"><strong>Telefon:</strong> <a href="tel:{{ $ad->contact_phone }}">{{ $ad->contact_phone }}</a></p>
                            <a href="tel:{{ $ad->contact_phone }}" class="btn btn-success w-100 mb-2"><i class="fas fa-phone"></i> Qo'ng'iroq qilish</a>
                        @endif
                        <a href="{{ route('animals') }}" class="btn btn-outline-secondary w-100">Barcha e'lonlar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('front.layouts.includes.footer')

@endsection
