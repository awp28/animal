@extends('front.layouts.main')
    
@section('content')

        <!-- Navbar start -->
        @include('front.layouts.includes.nav')
        <!-- Navbar End -->

       <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Search End -->

        <!-- Hero Start -->
        <div class="container-fluid py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <h4 class="mb-3 text-secondary">Qorovulbozor online</h4>
                        <h1 class="mb-5 display-3 text-primary">Dehqonchilik & Chorvachilik Bozori</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite">
            <div class="container">
                <div class="tab-class text-center">
                    <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                        <h1 class="display-4">Eng Mashhurlari</h1>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="owl-carousel animal-carousel justify-content-center">
                                @foreach ($animals as $animal)
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
                                            <p class="mb-2 text-dark fw-semibold">{{$animal->title}}</p>
                                            <p class="mb-2 text-muted small">{{$animal->description}}</p>
                                            <a href="#" class="text-success text-decoration-none small">£ Login for pricing</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('animals') }}" class="btn btn-warning px-4 py-2">
                                View All Listings
                            </a>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-6.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Apple</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Grapes</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-4.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Apricots</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Banana</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <!-- Fruits Shop End-->

        <!-- Vesitable Shop Start-->
        <div class="container py-5">
            <!-- Dynamic Background Header -->
            <div class="agro-header mb-5 position-relative overflow-hidden rounded-4">
                <div class="agro-overlay"></div>
                <div class="position-relative text-center text-white py-5">
                    <h1 class="display-4 fw-bold mb-3 animate-title">Qishloq Xo'jalik Texnikalari</h1>
                    <p class="lead mb-4">Zamonaviy texnologiyalar bilan qishloq xo'jaligini avtomatlashtiring</p>
                    
                    <!-- Search Bar -->
                    <div class="col-lg-6 mx-auto">
                        <div class="input-group search-box">
                            <input type="text" class="form-control form-control-lg" placeholder="Mashina nomini yoki xususiyatini qidiring...">
                            <button class="btn btn-success btn-lg">
                                <i class="fas fa-search"></i> Qidirish
                            </button>
                        </div>
                    </div>
                    
                    <!-- Category Filter -->
                    <div class="category-filter mt-4">
                        <button class="btn btn-outline-light btn-sm active">Hammasi</button>
                        <button class="btn btn-outline-light btn-sm">Traktorlar</button>
                        <button class="btn btn-outline-light btn-sm">Yig'ish texnikasi</button>
                        <button class="btn btn-outline-light btn-sm">Sug'orish</button>
                        <button class="btn btn-outline-light btn-sm">Ekin ishlari</button>
                    </div>
                </div>
            </div>
        
            <!-- Stats Counter -->
            <div class="row stats-counter mb-5">
                <div class="col-md-3 col-6">
                    <div class="stat-card text-center">
                        <div class="stat-number" data-count="150">0</div>
                        <div class="stat-label">Sotilgan mashina</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card text-center">
                        <div class="stat-number" data-count="98">0</div>
                        <div class="stat-label">Mijoz mamnuniyati %</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card text-center">
                        <div class="stat-number" data-count="24">0</div>
                        <div class="stat-label">Soat xizmat</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card text-center">
                        <div class="stat-number" data-count="12">0</div>
                        <div class="stat-label">Yil kafolat</div>
                    </div>
                </div>
            </div>
        
            <!-- Advanced Filter Section -->
            <div class="filter-section mb-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h4><i class="fas fa-filter me-2"></i> Mashinalarni Saralash</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option>Narx bo'yicha</option>
                                    <option>Arzondan qimmatga</option>
                                    <option>Qimmatdan arzonga</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option>Kredit muddati</option>
                                    <option>12 oy</option>
                                    <option>24 oy</option>
                                    <option>36 oy</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option>Ish turi</option>
                                    <option>Ekin ishlari</option>
                                    <option>Yig'ish ishlari</option>
                                    <option>Sug'orish</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Machine Grid with New Features -->
            <div class="row g-4">
                <!-- Traktor Card with Enhanced Features -->
                <div class="col-xl-4 col-lg-6">
                    <div class="machine-card premium">
                        <div class="badge-container">
                            <span class="badge-premium">Premium</span>
                            <span class="badge-discount">-15% chegirma</span>
                        </div>
                        <div class="machine-img">
                            <div class="image-slider">
                                <img src="img/tractor.jpg" class="img-fluid active" alt="Traktor">
                                <img src="img/tractor.jpg" class="img-fluid" alt="Traktor detail">
                            </div>
                            <button class="wishlist-btn">
                                <i class="far fa-heart"></i>
                            </button>
                            <div class="image-counter">1/2</div>
                        </div>
                        <div class="machine-content">
                            <div class="machine-header">
                                <h3 class="machine-title">Smart Tractor Pro</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="rating-text">4.5 (24 baho)</span>
                                </div>
                            </div>
                            
                            <p class="machine-desc">GPS navigatsiyali, avtomatik boshqaruvli zamonaviy traktor</p>
                            
                            <div class="price-section">
                                <div class="d-flex align-items-center">
                                    <div class="price">400 000 000 so'm</div>
                                    <div class="old-price">470 000 000 so'm</div>
                                </div>
                                <div class="monthly-payment">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    <span class="fw-bold">Oylik to'lov:</span>
                                    <span class="payment-amount">3 500 000 so'm</span>
                                    <span class="payment-period">(12 oy)</span>
                                </div>
                                <div class="saving-info">
                                    <i class="fas fa-piggy-bank me-1"></i>
                                    70 000 000 so'm tejang!
                                </div>
                            </div>
                            
                            <div class="specs-grid">
                                <div class="spec-item">
                                    <i class="fas fa-bolt"></i>
                                    <div>
                                        <div class="spec-label">Quvvat</div>
                                        <div class="spec-value">120 ot kuchi</div>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-gas-pump"></i>
                                    <div>
                                        <div class="spec-label">Yonilg'i</div>
                                        <div class="spec-value">8.5 L/soat</div>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-wifi"></i>
                                    <div>
                                        <div class="spec-label">Smart</div>
                                        <div class="spec-value">IoT ulanish</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="progress-section">
                                <div class="d-flex justify-content-between mb-2">
                                    <small>Mavjudlik:</small>
                                    <small>3 dona qoldi</small>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 10%"></div>
                                </div>
                            </div>
                            
                            <div class="action-buttons">
                                <button class="btn-buy">
                                    <i class="fas fa-shopping-cart"></i>
                                    Hoziroq sotib olish
                                </button>
                                <button class="btn-compare">
                                    <i class="fas fa-balance-scale"></i>
                                    Solishtirish
                                </button>
                            </div>
                            
                            <div class="quick-actions">
                                <a href="#" class="quick-link">
                                    <i class="fas fa-video"></i> Video ko'rish
                                </a>
                                <a href="#" class="quick-link">
                                    <i class="fas fa-file-pdf"></i> Spetsifikatsiya
                                </a>
                                <a href="#" class="quick-link">
                                    <i class="fas fa-store"></i> Namuna ko'rish
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Traktor Card with Enhanced Features -->
                <div class="col-xl-4 col-lg-6">
                    <div class="machine-card premium">
                        <div class="badge-container">
                            <span class="badge-premium">Premium</span>
                            <span class="badge-discount">-15% chegirma</span>
                        </div>
                        <div class="machine-img">
                            <div class="image-slider">
                                <img src="img/tractor.jpg" class="img-fluid active" alt="Traktor">
                                <img src="img/tractor.jpg" class="img-fluid" alt="Traktor detail">
                            </div>
                            <button class="wishlist-btn">
                                <i class="far fa-heart"></i>
                            </button>
                            <div class="image-counter">1/2</div>
                        </div>
                        <div class="machine-content">
                            <div class="machine-header">
                                <h3 class="machine-title">Smart Tractor Pro</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="rating-text">4.5 (24 baho)</span>
                                </div>
                            </div>
                            
                            <p class="machine-desc">GPS navigatsiyali, avtomatik boshqaruvli zamonaviy traktor</p>
                            
                            <div class="price-section">
                                <div class="d-flex align-items-center">
                                    <div class="price">400 000 000 so'm</div>
                                    <div class="old-price">470 000 000 so'm</div>
                                </div>
                                <div class="monthly-payment">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    <span class="fw-bold">Oylik to'lov:</span>
                                    <span class="payment-amount">3 500 000 so'm</span>
                                    <span class="payment-period">(12 oy)</span>
                                </div>
                                <div class="saving-info">
                                    <i class="fas fa-piggy-bank me-1"></i>
                                    70 000 000 so'm tejang!
                                </div>
                            </div>
                            
                            <div class="specs-grid">
                                <div class="spec-item">
                                    <i class="fas fa-bolt"></i>
                                    <div>
                                        <div class="spec-label">Quvvat</div>
                                        <div class="spec-value">120 ot kuchi</div>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-gas-pump"></i>
                                    <div>
                                        <div class="spec-label">Yonilg'i</div>
                                        <div class="spec-value">8.5 L/soat</div>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-wifi"></i>
                                    <div>
                                        <div class="spec-label">Smart</div>
                                        <div class="spec-value">IoT ulanish</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="progress-section">
                                <div class="d-flex justify-content-between mb-2">
                                    <small>Mavjudlik:</small>
                                    <small>3 dona qoldi</small>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 10%"></div>
                                </div>
                            </div>
                            
                            <div class="action-buttons">
                                <button class="btn-buy">
                                    <i class="fas fa-shopping-cart"></i>
                                    Hoziroq sotib olish
                                </button>
                                <button class="btn-compare">
                                    <i class="fas fa-balance-scale"></i>
                                    Solishtirish
                                </button>
                            </div>
                            
                            <div class="quick-actions">
                                <a href="#" class="quick-link">
                                    <i class="fas fa-video"></i> Video ko'rish
                                </a>
                                <a href="#" class="quick-link">
                                    <i class="fas fa-file-pdf"></i> Spetsifikatsiya
                                </a>
                                <a href="#" class="quick-link">
                                    <i class="fas fa-store"></i> Namuna ko'rish
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Liteng Log Loader Card with Enhanced Features -->
                <div class="col-xl-3 col-lg-5">
                    <div class="machine-card premium">
                        <div class="badge-container">
                            <span class="badge-premium">Premium</span>
                            <span class="badge-discount">-15% chegirma</span>
                        </div>
                        <div class="machine-img">
                            <div class="image-slider">
                                <img src="img/Liteng Log Loader.jpg" class="img-fluid active" alt="Liteng Log Loader">
                                <img src="img/Liteng Log Loader.jpg" class="img-fluid" alt="Liteng Log Loader detail">
                            </div>
                            <button class="wishlist-btn">
                                <i class="far fa-heart"></i>
                            </button>
                            <div class="image-counter">1/2</div>
                        </div>
                        <div class="machine-content">
                            <div class="machine-header">
                                <h3 class="machine-title">Smart Liteng Log Loader Pro</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="rating-text">4.5 (24 baho)</span>
                                </div>
                            </div>
                            
                            <p class="machine-desc">GPS navigatsiyali, avtomatik boshqaruvli zamonaviy Liteng Log Loader</p>
                            
                            <div class="price-section">
                                <div class="d-flex align-items-center">
                                    <div class="price">400 000 000 so'm</div>
                                    <div class="old-price">470 000 000 so'm</div>
                                </div>
                                <div class="monthly-payment">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    <span class="fw-bold">Oylik to'lov:</span>
                                    <span class="payment-amount">3 500 000 so'm</span>
                                    <span class="payment-period">(12 oy)</span>
                                </div>
                                <div class="saving-info">
                                    <i class="fas fa-piggy-bank me-1"></i>
                                    70 000 000 so'm tejang!
                                </div>
                            </div>
                            
                            <div class="specs-grid">
                                <div class="spec-item">
                                    <i class="fas fa-bolt"></i>
                                    <div>
                                        <div class="spec-label">Quvvat</div>
                                        <div class="spec-value">120 ot kuchi</div>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-gas-pump"></i>
                                    <div>
                                        <div class="spec-label">Yonilg'i</div>
                                        <div class="spec-value">8.5 L/soat</div>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-wifi"></i>
                                    <div>
                                        <div class="spec-label">Smart</div>
                                        <div class="spec-value">IoT ulanish</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="progress-section">
                                <div class="d-flex justify-content-between mb-2">
                                    <small>Mavjudlik:</small>
                                    <small>3 dona qoldi</small>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 10%"></div>
                                </div>
                            </div>
                            
                            <div class="action-buttons">
                                <button class="btn-buy">
                                    <i class="fas fa-shopping-cart"></i>
                                    Hoziroq sotib olish
                                </button>
                                <button class="btn-compare">
                                    <i class="fas fa-balance-scale"></i>
                                    Solishtirish
                                </button>
                            </div>
                            
                            <div class="quick-actions">
                                <a href="#" class="quick-link">
                                    <i class="fas fa-video"></i> Video ko'rish
                                </a>
                                <a href="#" class="quick-link">
                                    <i class="fas fa-file-pdf"></i> Spetsifikatsiya
                                </a>
                                <a href="#" class="quick-link">
                                    <i class="fas fa-store"></i> Namuna ko'rish
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Liteng Log Loader Card with Enhanced Features -->
                <div class="col-xl-3 col-lg-6">
                    <div class="machine-card premium">
                        <div class="badge-container">
                            <span class="badge-premium">Premium</span>
                            <span class="badge-discount">-15% chegirma</span>
                        </div>
                        <div class="machine-img">
                            <div class="image-slider">
                                <img src="img/Liteng Log Loader.jpg" class="img-fluid active" alt="Liteng Log Loader">
                                <img src="img/Liteng Log Loader.jpg" class="img-fluid" alt="Liteng Log Loader detail">
                            </div>
                            <button class="wishlist-btn">
                                <i class="far fa-heart"></i>
                            </button>
                            <div class="image-counter">1/2</div>
                        </div>
                        <div class="machine-content">
                            <div class="machine-header">
                                <h3 class="machine-title">Smart Liteng Log Loader Pro</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="rating-text">4.5 (24 baho)</span>
                                </div>
                            </div>
                            
                            <p class="machine-desc">GPS navigatsiyali, avtomatik boshqaruvli zamonaviy traktor</p>
                            
                            <div class="price-section">
                                <div class="d-flex align-items-center">
                                    <div class="price">600 000 000 so'm</div>
                                    <div class="old-price">480 000 000 so'm</div>
                                </div>
                                <div class="monthly-payment">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    <span class="fw-bold">Oylik to'lov:</span>
                                    <span class="payment-amount">3 700 000 so'm</span>
                                    <span class="payment-period">(12 oy)</span>
                                </div>
                                <div class="saving-info">
                                    <i class="fas fa-piggy-bank me-1"></i>
                                    70 000 000 so'm tejang!
                                </div>
                            </div>
                            
                            <div class="specs-grid">
                                <div class="spec-item">
                                    <i class="fas fa-bolt"></i>
                                    <div>
                                        <div class="spec-label">Quvvat</div>
                                        <div class="spec-value">120 ot kuchi</div>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-gas-pump"></i>
                                    <div>
                                        <div class="spec-label">Yonilg'i</div>
                                        <div class="spec-value">8.5 L/soat</div>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-wifi"></i>
                                    <div>
                                        <div class="spec-label">Smart</div>
                                        <div class="spec-value">IoT ulanish</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="progress-section">
                                <div class="d-flex justify-content-between mb-2">
                                    <small>Mavjudlik:</small>
                                    <small>3 dona qoldi</small>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 10%"></div>
                                </div>
                            </div>
                            
                            <div class="action-buttons">
                                <button class="btn-buy">
                                    <i class="fas fa-shopping-cart"></i>
                                    Hoziroq sotib olish
                                </button>
                                <button class="btn-compare">
                                    <i class="fas fa-balance-scale"></i>
                                    Solishtirish
                                </button>
                            </div>
                            
                            <div class="quick-actions">
                                <a href="#" class="quick-link">
                                    <i class="fas fa-video"></i> Video ko'rish
                                </a>
                                <a href="#" class="quick-link">
                                    <i class="fas fa-file-pdf"></i> Spetsifikatsiya
                                </a>
                                <a href="#" class="quick-link">
                                    <i class="fas fa-store"></i> Namuna ko'rish
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Plough Card with Enhanced Features -->
                <div class="col-xl-3 col-lg-6">
                    <div class="machine-card premium">
                        <div class="badge-container">
                            <span class="badge-premium">Premium</span>
                            <span class="badge-discount">-15% chegirma</span>
                        </div>
                        <div class="machine-img">
                            <div class="image-slider">
                                <img src="img/plough.jpg" class="img-fluid active" alt="Plough">
                                <img src="img/plough.jpg" class="img-fluid" alt="Plough detail">
                            </div>
                            <button class="wishlist-btn">
                                <i class="far fa-heart"></i>
                            </button>
                            <div class="image-counter">1/2</div>
                        </div>
                        <div class="machine-content">
                            <div class="machine-header">
                                <h3 class="machine-title">Smart Plough Pro</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="rating-text">4.5 (24 baho)</span>
                                </div>
                            </div>
                            
                            <p class="machine-desc">GPS navigatsiyali, avtomatik boshqaruvli zamonaviy traktor</p>
                            
                            <div class="price-section">
                                <div class="d-flex align-items-center">
                                    <div class="price">500 000 000 so'm</div>
                                    <div class="old-price">460 000 000 so'm</div>
                                </div>
                                <div class="monthly-payment">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    <span class="fw-bold">Oylik to'lov:</span>
                                    <span class="payment-amount">3 500 000 so'm</span>
                                    <span class="payment-period">(12 oy)</span>
                                </div>
                                <div class="saving-info">
                                    <i class="fas fa-piggy-bank me-1"></i>
                                    70 000 000 so'm tejang!
                                </div>
                            </div>
                            
                            <div class="specs-grid">
                                <div class="spec-item">
                                    <i class="fas fa-bolt"></i>
                                    <div>
                                        <div class="spec-label">Quvvat</div>
                                        <div class="spec-value">120 ot kuchi</div>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-gas-pump"></i>
                                    <div>
                                        <div class="spec-label">Yonilg'i</div>
                                        <div class="spec-value">8.5 L/soat</div>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-wifi"></i>
                                    <div>
                                        <div class="spec-label">Smart</div>
                                        <div class="spec-value">IoT ulanish</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="progress-section">
                                <div class="d-flex justify-content-between mb-2">
                                    <small>Mavjudlik:</small>
                                    <small>3 dona qoldi</small>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 10%"></div>
                                </div>
                            </div>
                            
                            <div class="action-buttons">
                                <button class="btn-buy">
                                    <i class="fas fa-shopping-cart"></i>
                                    Hoziroq sotib olish
                                </button>
                                <button class="btn-compare">
                                    <i class="fas fa-balance-scale"></i>
                                    Solishtirish
                                </button>
                            </div>
                            
                            <div class="quick-actions">
                                <a href="#" class="quick-link">
                                    <i class="fas fa-video"></i> Video ko'rish
                                </a>
                                <a href="#" class="quick-link">
                                    <i class="fas fa-file-pdf"></i> Spetsifikatsiya
                                </a>
                                <a href="#" class="quick-link">
                                    <i class="fas fa-store"></i> Namuna ko'rish
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Traktor Card with Enhanced Features -->
                <div class="col-xl-4 col-lg-6">
                    <div class="machine-card premium">
                        <div class="badge-container">
                            <span class="badge-premium">Premium</span>
                            <span class="badge-discount">-15% chegirma</span>
                        </div>
                        <div class="machine-img">
                            <div class="image-slider">
                                <img src="img/combine.jpg" class="img-fluid active" alt="Combine">
                                <img src="img/combine.jpg" class="img-fluid" alt="Smart Combine X9">
                            </div>
                            <button class="wishlist-btn">
                                <i class="far fa-heart"></i>
                            </button>
                            <div class="image-counter">1/2</div>
                        </div>
                        <div class="machine-content">
                            <div class="machine-header">
                                <h3 class="machine-title">Smart Combine X9</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="rating-text">4.5 (24 baho)</span>
                                </div>
                            </div>
                            
                            <p class="machine-desc">GPS navigatsiyali, avtomatik boshqaruvli zamonaviy traktor</p>
                            
                            <div class="price-section">
                                <div class="d-flex align-items-center">
                                    <div class="price">490 000 000 so'm</div>
                                    <div class="old-price">470 000 000 so'm</div>
                                </div>
                                <div class="monthly-payment">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    <span class="fw-bold">Oylik to'lov:</span>
                                    <span class="payment-amount">3 500 000 so'm</span>
                                    <span class="payment-period">(12 oy)</span>
                                </div>
                                <div class="saving-info">
                                    <i class="fas fa-piggy-bank me-1"></i>
                                    70 000 000 so'm tejang!
                                </div>
                            </div>
                            
                            <div class="specs-grid">
                                <div class="spec-item">
                                    <i class="fas fa-bolt"></i>
                                    <div>
                                        <div class="spec-label">Quvvat</div>
                                        <div class="spec-value">120 ot kuchi</div>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-gas-pump"></i>
                                    <div>
                                        <div class="spec-label">Yonilg'i</div>
                                        <div class="spec-value">8.5 L/soat</div>
                                    </div>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-wifi"></i>
                                    <div>
                                        <div class="spec-label">Smart</div>
                                        <div class="spec-value">IoT ulanish</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="progress-section">
                                <div class="d-flex justify-content-between mb-2">
                                    <small>Mavjudlik:</small>
                                    <small>3 dona qoldi</small>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 30%"></div>
                                </div>
                            </div>
                            
                            <div class="action-buttons">
                                <button class="btn-buy">
                                    <i class="fas fa-shopping-cart"></i>
                                    Hoziroq sotib olish
                                </button>
                                <button class="btn-compare">
                                    <i class="fas fa-balance-scale"></i>
                                    Solishtirish
                                </button>
                            </div>
                            
                            <div class="quick-actions">
                                <a href="#" class="quick-link">
                                    <i class="fas fa-video"></i> Video ko'rish
                                </a>
                                <a href="#" class="quick-link">
                                    <i class="fas fa-file-pdf"></i> Spetsifikatsiya
                                </a>
                                <a href="#" class="quick-link">
                                    <i class="fas fa-store"></i> Namuna ko'rish
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Cosechadora Card -->
                <div class="col-xl-3 col-lg-6">
                    <div class="machine-card">
                        <div class="badge-container">
                            <span class="badge-new">Yangi</span>
                        </div>
                        <div class="machine-img">
                            <div class="video-overlay">
                                <img src="img/cosechadora.jpg" class="img-fluid" alt="Cosechadora">
                                <button class="play-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                            <button class="wishlist-btn">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="machine-content">
                            <div class="machine-header">
                                <h3 class="machine-title">Smart Cosechadora X10</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="rating-text">4.0 (18 baho)</span>
                                </div>
                            </div>
                            
                            <p class="machine-desc">Avtomatik yuqori darajadagi sifat tizimiga ega yuqori unumli cosechadora</p>
                            
                            <div class="price-section">
                                <div class="d-flex align-items-center">
                                    <div class="price">600 000 000 so'm</div>
                                </div>
                                <div class="monthly-payment">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    <span class="fw-bold">Oylik to'lov:</span>
                                    <span class="payment-amount">4 600 000 so'm</span>
                                    <span class="payment-period">(12 oy)</span>
                                </div>
                            </div>
                            
                            <div class="features-list">
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success"></i>
                                    <span>Har bir gektardan qo'shimcha 2 tonna hosil</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success"></i>
                                    <span>Avtomatik aniqlik tizimi 99.8%</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success"></i>
                                    <span>Smart sensorlar bilan jihozlangan</span>
                                </div>
                            </div>
                            
                            <div class="tech-specs">
                                <h6>Texnik xususiyatlar:</h6>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <small><i class="fas fa-arrows-alt-h me-1"></i> Ish kengligi: 8m</small>
                                    </div>
                                    <div class="col-6">
                                        <small><i class="fas fa-tachometer-alt me-1"></i> Tezlik: 8 km/soat</small>
                                    </div>
                                    <div class="col-6">
                                        <small><i class="fas fa-battery-full me-1"></i> Bak: 450L</small>
                                    </div>
                                    <div class="col-6">
                                        <small><i class="fas fa-weight me-1"></i> Og'irlik: 15t</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="action-buttons">
                                <button class="btn-buy">
                                    <i class="fas fa-shopping-cart"></i>
                                    Savatga qo'shish
                                </button>
                                <button class="btn-demo">
                                    <i class="fas fa-calendar-check"></i>
                                    Demo so'rash
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Paxta Terish Mashinasi with AI Badge -->
                <div class="col-xl-4 col-lg-6">
                    <div class="machine-card ai">
                        <div class="badge-container">
                            <span class="badge-ai">AI Powered</span>
                            <span class="badge-popular">Ko'p talab</span>
                        </div>
                        <div class="machine-img">
                            <img src="img/paxta teradi.jpg" class="img-fluid" alt="Paxta terish mashinasi">
                            <div class="hover-info">
                                <div class="info-item">
                                    <i class="fas fa-robot"></i>
                                    <span>Sun'iy Intellekt</span>
                                </div>
                                <div class="info-item">
                                    <i class="fas fa-satellite"></i>
                                    <span>GPS Tracking</span>
                                </div>
                            </div>
                        </div>
                        <div class="machine-content">
                            <div class="machine-header">
                                <h3 class="machine-title">AI Cotton Harvester</h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="rating-text">5.0 (32 baho)</span>
                                </div>
                            </div>
                            
                            <p class="machine-desc">Sun'iy intellekt yordamida paxta sifatini aniqlovchi avtomatik teruvchi</p>
                            
                            <div class="price-section">
                                <div class="d-flex align-items-center">
                                    <div class="price">350 000 000 so'm</div>
                                </div>
                                <div class="monthly-payment">
                                    <i class="fas fa-calendar-alt me-2"></i>
                                    <span class="fw-bold">Oylik to'lov:</span>
                                    <span class="payment-amount">3 060 000 so'm</span>
                                    <span class="payment-period">(24 oy)</span>
                                </div>
                            </div>
                            
                            <div class="ai-features">
                                <h6>AI Imkoniyatlari:</h6>
                                <div class="ai-feature">
                                    <i class="fas fa-brain"></i>
                                    <div>
                                        <div class="ai-title">Aqlli aniqlash</div>
                                        <div class="ai-desc">Paxta sifatini real vaqtda baholash</div>
                                    </div>
                                </div>
                                <div class="ai-feature">
                                    <i class="fas fa-chart-line"></i>
                                    <div>
                                        <div class="ai-title">Optimizatsiya</div>
                                        <div class="ai-desc">Ish jarayonini avtomatik optimallashtirish</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="action-buttons">
                                <button class="btn-ai-demo">
                                    <i class="fas fa-robot"></i>
                                    AI Demo ko'rish
                                </button>
                                <button class="btn-calculator">
                                    <i class="fas fa-calculator"></i>
                                    Daromad kalkulyatori
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Continue other cards similarly with enhanced features -->
            </div>
        
            <!-- Comparison Modal Trigger -->
            <div class="comparison-bar fixed-bottom d-none">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center p-3 bg-white shadow-lg rounded-top">
                        <div>
                            <h5 class="mb-0">Solishtirish ro'yxati (2)</h5>
                            <small>Traktor Pro va Smart Combine</small>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-secondary me-2">Tozalash</button>
                            <button class="btn btn-success">Solishtirish</button>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- New Features Section -->
            <div class="features-advanced mt-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-bg">
                                        <i class="fas fa-sync-alt"></i>
                                    </div>
                                    <h5>Almashtirish Dasturi</h5>
                                    <p class="text-muted">Eski mashinangizni yangisiga almashtiring va 20% chegirma oling</p>
                                    <a href="#" class="feature-link">Batafsil <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card">
                                    <div class="feature-icon-bg">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <h5>Hamkorlik Dasturi</h5>
                                    <p class="text-muted">Biz bilan hamkor bo'ling va qo'shimcha daromad toping</p>
                                    <a href="#" class="feature-link">Qo'shilish <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="finance-calculator">
                            <h5 class="mb-3">Mashina Kalkulyatori</h5>
                            <div class="mb-3">
                                <label class="form-label">Mashina narxi</label>
                                <input type="range" class="form-range" min="100" max="500" value="350">
                                <div class="d-flex justify-content-between">
                                    <small>100M</small>
                                    <small>500M</small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Boshlang'ich to'lov</label>
                                <select class="form-select">
                                    <option>0%</option>
                                    <option>10%</option>
                                    <option>20%</option>
                                    <option>30%</option>
                                </select>
                            </div>
                            <div class="result">
                                <div class="result-item">
                                    <span>Oylik to'lov:</span>
                                    <span class="result-value">3 450 000 so'm</span>
                                </div>
                                <button class="btn btn-success w-100">
                                    <i class="fas fa-file-alt me-2"></i> Onlayn ariza topshirish
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Live Support Widget -->
            <div class="support-widget">
                <div class="support-bubble">
                    <i class="fas fa-headset"></i>
                    <span class="pulse"></span>
                </div>
                <div class="support-card">
                    <div class="support-header">
                        <h6>Yordam kerakmi?</h6>
                        <small>Onlayn maslahatchi</small>
                    </div>
                    <div class="support-buttons">
                        <button class="btn-chat">
                            <i class="fas fa-comment"></i> Chat
                        </button>
                        <button class="btn-call">
                            <i class="fas fa-phone"></i> Qo'ng'iroq
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vesitable Shop End -->

        <!-- Bestsaler Product Start -->
        <div class="container-fluid">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                    <h1 class="display-4">Bestseller Products</h1>
                    <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="img/best-product-1.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Organic Tomato</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">3.12 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="img/best-product-2.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Organic Tomato</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">3.12 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="img/best-product-3.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Organic Tomato</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">3.12 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="img/best-product-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Organic Tomato</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">3.12 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="img/best-product-5.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Organic Tomato</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">3.12 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="img/best-product-6.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Organic Tomato</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">3.12 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="img/fruite-item-1.jpg" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="img/fruite-item-2.jpg" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="img/fruite-item-3.jpg" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="img/fruite-item-4.jpg" class="img-fluid rounded" alt="">
                            <div class="py-2">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.12 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bestsaler Product End -->


        <!-- Fact Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="bg-light p-5 rounded">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>satisfied customers</h4>
                                <h1>1963</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>quality of service</h4>
                                <h1>99%</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>quality certificates</h4>
                                <h1>33</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>Available Products</h4>
                                <h1>789</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->


        <!-- Tastimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="testimonial-header text-center">
                    <h4 class="text-primary">Our Testimonial</h4>
                    <h1 class="display-5 mb-5 text-dark">Our Client Saying!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Client Name</h4>
                                    <p class="m-0 pb-3">Profession</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->


        <!-- Footer Start -->
        @include('front.layouts.includes.footer')
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


@endsection