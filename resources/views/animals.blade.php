@extends('front.layouts.main')
    
@section('content')

    <!-- Navbar start -->
    @include('front.layouts.includes.nav')
    <!-- Navbar End -->

    <!-- Listings Page Start -->
    <div class="py-5 mt-5">
        <div class="row g-3 mx-0">
                <!-- Left Sidebar - Search & Filter (admin ma'lumotlaridan) -->
                <div class="col-lg-2 col-md-3 mb-4 ps-0" style="max-width: 250px;">
                    <div class="bg-light p-4 rounded">
                        <h5 class="mb-3">Qidiruv va filtrlash</h5>
                        <form method="GET" action="{{ route('animals') }}" id="filter-form">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Qidiruv</label>
                                <input type="text" name="search" class="form-control" placeholder="Sarlavha..." value="{{ request('search') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kategoriya</label>
                                <select name="category_id" class="form-select">
                                    <option value="">— Barchasi —</option>
                                    @foreach($categories as $c)
                                        <option value="{{ $c->id }}" {{ request('category_id') == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Hudud</label>
                                <select name="region_id" class="form-select">
                                    <option value="">— Barchasi —</option>
                                    @foreach($regions as $r)
                                        <option value="{{ $r->id }}" {{ request('region_id') == $r->id ? 'selected' : '' }}>{{ $r->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Zot</label>
                                <select name="breed_id" class="form-select">
                                    <option value="">— Barchasi —</option>
                                    @foreach($breeds as $b)
                                        <option value="{{ $b->id }}" {{ request('breed_id') == $b->id ? 'selected' : '' }}>{{ $b->name }} @if($b->category)({{ $b->category->name }})@endif</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Saralash</label>
                                <select name="order" class="form-select">
                                    <option value="newest" {{ request('order') == 'newest' ? 'selected' : '' }}>Yangi avval</option>
                                    <option value="price_asc" {{ request('order') == 'price_asc' ? 'selected' : '' }}>Narx: pastdan yuqoriga</option>
                                    <option value="price_desc" {{ request('order') == 'price_desc' ? 'selected' : '' }}>Narx: yuqoridan pastga</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success w-100 mb-2">Qidirish</button>
                            <a href="{{ route('animals') }}" class="btn btn-outline-secondary w-100">Tozalash</a>
                        </form>
                    </div>
                </div>

                <!-- Main Content Area -->
                <div class="col-lg-7 col-md-9 ps-0">
                    <!-- Promotional Banner -->
                    <div class="text-white p-3 rounded mb-4 d-flex justify-content-between align-items-center mt-5 ms-2" style="width: 720px; height: 90px; background: rgb(94, 119, 74);">
                        <div>
                            <strong>Not finding what you're looking for?</strong> Take the hassle out of trading with specialist support.
                        </div>
                        <button class="btn btn-warning btn-sm ms-3">Request a call back</button>
                    </div>

                    <!-- E'lonlar ro'yxati (admin dan) -->
                    <div class="row g-1" style="row-gap: 20px;">
                        @forelse ($animals as $animal)
                            <div class="col-md-6 col-lg-4">
                                <a href="{{ route('ad.show', $animal) }}" class="text-decoration-none text-dark">
                                    <div class="product-card-listing card h-100">
                                        <div class="product-image-wrapper position-relative">
                                            <div class="ratio ratio-4x3">
                                                @if($animal->img)
                                                <img src="{{ str_starts_with($animal->img, 'http') ? $animal->img : asset($animal->img) }}" class="w-100 h-100 object-fit-cover" alt="{{ $animal->title }}">
                                                @else
                                                <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center">
                                                    <span class="text-muted">Rasm yo'q</span>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="position-absolute top-0 start-0 m-2">
                                                <span class="badge px-3 py-2" style="background: rgb(94, 119, 74);">{{ $animal->type ?? 'Sotuv' }}</span>
                                            </div>
                                        </div>
                                        <div class="listing-details bg-light p-3">
                                            <p class="mb-1 text-dark fw-semibold">{{ $animal->title }}</p>
                                            @if($animal->category)
                                                <span class="badge bg-secondary mb-1">{{ $animal->category->name }}</span>
                                            @endif
                                            @if($animal->region)
                                                <span class="badge bg-light text-dark border mb-1">{{ $animal->region->name }}</span>
                                            @endif
                                            <p class="mb-2 text-muted small">{{ \Illuminate\Support\Str::limit($animal->description, 80) }}</p>
                                            <p class="mb-0 text-success fw-bold">{{ number_format($animal->price) }} {{ $animal->currency }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5 text-muted">
                                <p>E'lonlar topilmadi. Filtrlarni o'zgartirib ko'ring.</p>
                            </div>
                        @endforelse
                    </div>
                    @if(method_exists($animals, 'links'))
                        <div class="d-flex justify-content-center mt-4">
                            {{ $animals->links() }}
                        </div>
                    @endif
                </div>

                <!-- Right Sidebar - Advertisements -->
                <div class="col-lg-3 d-none d-lg-block" style="max-width: 280px; margin-top: calc(3rem + 80px);">
                    <div class="mb-4">
                        <div class="bg-white border rounded p-3 text-center">
                            <div class="mb-3">
                                <strong class="text-primary">WYNNSTAY</strong>
                            </div>
                            <div class="mb-3">
                                <img src="https://via.placeholder.com/200x150?text=Advertisement" class="img-fluid rounded" alt="Ad">
                            </div>
                            <h6 class="fw-bold mb-2">Lock in your savings before the harvest season starts!</h6>
                            <p class="small text-muted mb-3">Early for discounts, flexible payment and forward delivery options on Wrap, Sheet and Additive from Wynnstay.</p>
                            <button class="btn btn-primary btn-sm w-100">ENQUIRE NOW</button>
                        </div>
                    </div>
                    <div>
                        <div class="bg-white border rounded p-3 text-center">
                            <div class="mb-3">
                                <strong class="text-primary">WYNNSTAY</strong>
                            </div>
                            <div class="mb-3">
                                <img src="https://via.placeholder.com/200x150?text=Advertisement" class="img-fluid rounded" alt="Ad">
                            </div>
                            <h6 class="fw-bold mb-2">Lock in your savings before the harvest season starts!</h6>
                            <p class="small text-muted mb-3">Early for discounts, flexible payment and forward delivery options on Wrap, Sheet and Additive from Wynnstay.</p>
                            <button class="btn btn-primary btn-sm w-100">ENQUIRE NOW</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Listings Page End -->

    <!-- Footer -->
    @include('front.layouts.includes.footer')

@endsection
