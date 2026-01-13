@extends('front.layouts.main')
    
@section('content')

    <!-- Navbar start -->
    @include('front.layouts.includes.nav')
    <!-- Navbar End -->

    <!-- Listings Page Start -->
    <div class="py-5 mt-5">
        <div class="row g-3 mx-0">
                <!-- Left Sidebar - Search & Filter -->
                <div class="col-lg-2 col-md-3 mb-4 ps-0" style="max-width: 250px;">
                    <div class="bg-light p-4 rounded">
                        <h5 class="mb-3">Search Animals</h5>
                        
                        <!-- Category -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Category</label>
                            <select class="form-select">
                                <option selected>All Animals</option>
                                <option>Cattle</option>
                                <option>Sheep</option>
                                <option>Goats</option>
                                <option>Pigs</option>
                            </select>
                        </div>

                        <!-- Order By -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Order By</label>
                            <select class="form-select">
                                <option selected>Popular Now</option>
                                <option>Newest First</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                            </select>
                        </div>

                        <!-- Find Near Postcode -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Find Near Postcode</label>
                            <a href="#" class="text-success text-decoration-none small">Login to search location</a>
                        </div>

                        <!-- Checkboxes -->
                        <div class="mb-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="wanted">
                                <label class="form-check-label" for="wanted">
                                    Wanted <span class="text-muted">(5)</span>
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="hideSold" checked>
                                <label class="form-check-label" for="hideSold">
                                    Hide Sold <span class="text-muted">(44)</span>
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="hideWanted" checked>
                                <label class="form-check-label" for="hideWanted">
                                    Hide Wanted <span class="text-muted">(58)</span>
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="auctions">
                                <label class="form-check-label" for="auctions">
                                    Auctions <span class="text-muted">(4)</span>
                                </label>
                            </div>
                        </div>

                        <!-- Breeds Search -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Breeds</label>
                            <input type="text" class="form-control" placeholder="Search Breeds">
                        </div>

                        <!-- Breed Checkboxes -->
                        <div class="mb-3">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="breed1">
                                <label class="form-check-label" for="breed1">
                                    Hereford <span class="text-muted">(21)</span>
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="breed2">
                                <label class="form-check-label" for="breed2">
                                    Angus <span class="text-muted">(15)</span>
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="breed3">
                                <label class="form-check-label" for="breed3">
                                    Holstein <span class="text-muted">(8)</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content Area -->
                <div class="col-lg-7 col-md-9 ps-0">
                    <!-- Promotional Banner -->
                    <div class="bg-success text-white p-3 rounded mb-4 d-flex justify-content-between align-items-center mt-5" style="width: 729px; height: 90px; background: rgb(94, 119, 74);">
                        <div>
                            <strong>Not finding what you're looking for?</strong> Take the hassle out of trading with specialist support.
                        </div>
                        <button class="btn btn-warning btn-sm ms-3">Request a call back</button>
                    </div>

                    <!-- Animal Listings Grid -->
                    <div class="row g-1">
                        @foreach ($animals as $animal)
                            <div class="col-md-6 col-lg-4">
                                <div class="product-card-listing">
                                    <div class="product-image-wrapper position-relative">
                                        <div class="ratio ratio-4x3">
                                            @if($animal->img)
                                            <img src="{{ asset('storage/'.$animal->img) }}" class="w-100 h-100 object-fit-cover" alt="{{$animal->title}}">
                                            @else
                                            <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center">
                                                <span class="text-muted">Rasm yo'q</span>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="position-absolute top-0 start-0 m-2">
                                            <span class="badge bg-success px-3 py-2">FOR SALE</span>
                                        </div>
                                    </div>
                                    <div class="listing-details bg-light p-3">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-lock text-success me-2"></i>
                                            <span class="text-muted small">Members Access</span>
                                            <a href="#" class="text-success text-decoration-none ms-2 small">Login for more info</a>
                                        </div>
                                        <p class="mb-2 text-dark fw-semibold">{{$animal->title}}</p>
                                        <p class="mb-2 text-muted small">{{$animal->description}}</p>
                                        <a href="#" class="text-success text-decoration-none small">£ Login for pricing</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
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
