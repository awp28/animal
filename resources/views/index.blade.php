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
                            <a href="{{ route('listings') }}" class="btn btn-warning px-4 py-2">
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
        <div class="container py-4">
        <!-- Sarlavha -->
        <div class="text-center mb-5">
            <h1 class="main-title">Qishloq Xo'jalik Mashinalari</h1>
        </div>

        <!-- Mashinalar qatori -->
        <div class="row g-4">
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <!-- kartalar -->
            </div>
            <!-- Traktor -->
            <div class="col-lg-4 col-md-6">
                <div class="machine-card">
                    <div class="machine-img">
                           <img src="img/tractor.jpg" class="img-fluid" alt="Tractor">
                        <div class="kredit-badge">
                            <i class="fas fa-credit-card me-1"></i> KREDIT MAVJUD
                        </div>
                    </div>
                    <div class="machine-content">
                        <h3 class="machine-title">Traktor</h3>
                        <p class="text-muted">Yer haydash, ekin ekish va yuk tashish uchun universal texnika</p>
                        
                        <div class="price-section">
                            <div class="price">400 000 000 so'm</div>
                            <div class="monthly-payment">
                                <i class="fas fa-calendar-alt me-1"></i> Oylik to'lov: 3 500 000 so'm (12 oy)
                            </div>
                        </div>
                        
                        <div class="specs">
                            <span class="spec-item">
                                <i class="fas fa-bolt"></i> 120 ot kuchi
                            </span>
                            <span class="spec-item">
                                <i class="fas fa-cogs"></i> Avtomatik
                            </span>
                            <span class="spec-item">
                                <i class="fas fa-gas-pump"></i> Dizel
                            </span>
                        </div>
                        
                        <button class="btn-details">
                            <i class="fas fa-info-circle"></i> Batafsil ma'lumot
                        </button>
                    </div>
                </div>
            </div>

            <!-- Kombayn -->
            <div class="col-lg-4 col-md-6">
                <div class="machine-card">
                    <div class="machine-img">
                        <img src="img/combine.jpg" class="img-fluid"  alt="Kombayn">
                        <div class="kredit-badge">
                            <i class="fas fa-credit-card me-1"></i> KREDIT MAVJUD
                        </div>
                    </div>
                    <div class="machine-content">
                        <h3 class="machine-title">Kombayn</h3>
                        <p class="text-muted">Galla va ekinlarni tez va samarali yig'ish uchun maxsus texnika</p>
                        
                        <div class="price-section">
                            <div class="price">480 000 000 so'm</div>
                            <div class="monthly-payment">
                                <i class="fas fa-calendar-alt me-1"></i> Oylik to'lov: 4 200 000 so'm (12 oy)
                            </div>
                        </div>
                        
                        <div class="specs">
                            <span class="spec-item">
                                <i class="fas fa-tachometer-alt"></i> 8 gektar/kun
                            </span>
                            <span class="spec-item">
                                <i class="fas fa-seedling"></i> 99% aniqlik
                            </span>
                            <span class="spec-item">
                                <i class="fas fa-wind"></i> Havo tozalagich
                            </span>
                        </div>
                        
                        <button class="btn-details">
                            <i class="fas fa-info-circle"></i> Batafsil ma'lumot
                        </button>
                    </div>
                </div>
            </div>

            <!-- Liteng Log Loader.jpg -->
            <div class="col-lg-4 col-md-6">
                <div class="machine-card">
                    <div class="machine-img">
                       <img src="img/Liteng Log Loader.jpg" class="img-fluid" alt="Liteng Log Loader.jpg">
                        <div class="kredit-badge">
                            <i class="fas fa-credit-card me-1"></i> KREDIT MAVJUD
                        </div>
                    </div>
                    <div class="machine-content">
                        <h3 class="machine-title">Liteng Log Loader.jpg</h3>
                        <p class="text-muted">Urug'larni aniq va teng ekish uchun maxsus qurilma</p>
                        
                        <div class="price-section">
                            <div class="price">455 000 000 so'm</div>
                            <div class="monthly-payment">
                                <i class="fas fa-calendar-alt me-1"></i> Oylik to'lov: 3 980 000 so'm (12 oy)
                            </div>
                        </div>
                        
                        <div class="specs">
                            <span class="spec-item">
                                <i class="fas fa-bullseye"></i> ±2 mm aniqlik
                            </span>
                            <span class="spec-item">
                                <i class="fas fa-ruler-combined"></i> 4 metr kenglik
                            </span>
                            <span class="spec-item">
                                <i class="fas fa-sliders-h"></i> Sozlash mumkin
                            </span>
                        </div>
                        
                        <button class="btn-details">
                            <i class="fas fa-info-circle"></i> Batafsil ma'lumot
                        </button>
                    </div>
                </div>
            </div>

            <!--Seeder-->
            <div class="col-lg-4 col-md-6">
                <div class="machine-card">
                    <div class="machine-img">
                        <img src="img/seeder.jpg" class="img-fluid"  alt="Seeder">
                        <div class="kredit-badge">
                            <i class="fas fa-credit-card me-1"></i> KREDIT MAVJUD
                        </div>
                    </div>
                    <div class="machine-content">
                        <h3 class="machine-title">Seeder</h3>
                        <p class="text-muted">Tuproqni chuqur va sifatli haydash uchun mustahkam asbob</p>
                        
                        <div class="price-section">
                            <div class="price">120 000 000 so'm</div>
                            <div class="monthly-payment">
                                <i class="fas fa-calendar-alt me-1"></i> Oylik to'lov: 1 050 000 so'm (12 oy)
                            </div>
                        </div>
                        
                        <div class="specs">
                            <span class="spec-item">
                                <i class="fas fa-shield-alt"></i> Qattiq po'lat
                            </span>
                            <span class="spec-item">
                                <i class="fas fa-ruler-vertical"></i> 30-40 sm chuqurlik
                            </span>
                            <span class="spec-item">
                                <i class="fas fa-hard-hat"></i> Mustahkam
                            </span>
                        </div>
                        
                        <button class="btn-details">
                            <i class="fas fa-info-circle"></i> Batafsil ma'lumot
                        </button>
                    </div>
                </div>
            </div>

            <!-- Plough -->
            <div class="col-lg-4 col-md-6">
                <div class="machine-card">
                    <div class="machine-img">
                       <img src="img/plough.jpg" class="img-fluid" alt="Plough">
                        <div class="kredit-badge">
                            <i class="fas fa-credit-card me-1"></i> KREDIT MAVJUD
                        </div>
                    </div>
                    <div class="machine-content">
                        <h3 class="machine-title">Plough</h3>
                        <p class="text-muted">Tuproqni yumshatish va begona o'tlarni yo'q qilish texnikasi</p>
                        
                        <div class="price-section">
                            <div class="price">280 000 000 so'm</div>
                            <div class="monthly-payment">
                                <i class="fas fa-calendar-alt me-1"></i> Oylik to'lov: 2 450 000 so'm (12 oy)
                            </div>
                        </div>
                        
                        <div class="specs">
                            <span class="spec-item">
                                <i class="fas fa-leaf"></i> Ekologik toza
                            </span>
                            <span class="spec-item">
                                <i class="fas fa-compact-disc"></i> 12 ishchi disk
                            </span>
                            <span class="spec-item">
                                <i class="fas fa-cogs"></i> Oson boshqarish
                            </span>
                        </div>
                        
                        <button class="btn-details">
                            <i class="fas fa-info-circle"></i> Batafsil ma'lumot
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sug'orish tizimi -->
            <div class="col-lg-4 col-md-6">
                <div class="machine-card">
                    <div class="machine-img">
                       <img src="img/paxta teradi.jpg" class="img-fluid" alt="Paxta teradi">
                        <div class="kredit-badge">
                            <i class="fas fa-credit-card me-1"></i> KREDIT MAVJUD
                        </div>
                    </div>
                    <div class="machine-content">
                        <h3 class="machine-title">Paxtani tez teradi</h3>
                        <p class="text-muted">Avtomatik tomchilatib sug'orish tizimi, suvni tejaydi</p>
                        
                        <div class="price-section">
                            <div class="price">350 000 000 so'm</div>
                            <div class="monthly-payment">
                                <i class="fas fa-calendar-alt me-1"></i> Oylik to'lov: 3 060 000 so'm (12 oy)
                            </div>
                        </div>
                        
                        <div class="specs">
                            <span class="spec-item">
                                <i class="fas fa-tint"></i> 60% suv tejash
                            </span>
                            <span class="spec-item">
                                <i class="fas fa-robot"></i> Avtomatik
                            </span>
                            <span class="spec-item">
                                <i class="fas fa-mobile-alt"></i> Telefon boshqaruvi
                            </span>
                        </div>
                        
                        <button class="btn-details">
                            <i class="fas fa-info-circle"></i> Batafsil ma'lumot
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Xususiyatlar -->
        <div class="features mt-5">
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>2 Yil Kafolat</h5>
                    <p class="text-muted">Barcha mashinalar uchun 2 yillik kafolat</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h5>Yetkazib Berish</h5>
                    <p class="text-muted">O'zbekiston bo'ylab bepul yetkazib berish</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h5>Texnik Xizmat</h5>
                    <p class="text-muted">24/7 texnik xizmat va ehtiyot qismlar</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h5>O'qitish</h5>
                    <p class="text-muted">Bepul mashina boshqarish bo'yicha o'qitish</p>
                </div>
            </div>
        </div>

        <!-- Kredit shartlari -->
        <div class="alert alert-success mt-4" style="background: linear-gradient(45deg, #28a745, #20c997); color: white; border: none;">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="alert-heading mb-1">
                        <i class="fas fa-percentage me-2"></i> Maxsus Kredit Taklifi!
                    </h4>
                    <p class="mb-0">0% dastlabki to'lov, 24 oygacha muddat, yillik 10% foiz stavkasi</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <button class="btn btn-light btn-lg">
                        <i class="fas fa-file-contract me-2"></i> Ariza topshirish
                    </button>
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