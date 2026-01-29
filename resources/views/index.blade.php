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
        <div class="container py-4">
        <!-- Sarlavha  😎😎😎-->
        <div class="text-center mb-5">
            <h1 class="main-title">Qishloq Xo'jalik Mashinalari</h1>
        </div>

        <!-- Mashinalar qatori -->
        <div class="row g-4">
            <!-- Traktor  😎😎😎-->
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

            <!-- Kombayn  😎😎😎-->
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

            <!-- Liteng Log Loader 😎😎😎-->
            <div class="col-lg-4 col-md-6">
                <div class="machine-card">
                    <div class="machine-img">
                       <img src="img/Liteng Log Loader.jpg" class="img-fluid" alt="Liteng Log Loader">
                        <div class="kredit-badge">
                            <i class="fas fa-credit-card me-4"></i> KREDIT MAVJUD
                        </div>
                    </div>
                    <div class="machine-content">
                        <h3 class="machine-title">Liteng Log Loader</h3>
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

            <!--Seeder 😎😎😎-->
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

            <!-- Plough  😎😎😎-->
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

            <!-- Sug'orish tizimi 😎😎😎 -->
            <div class="col-lg-4 col-md-5">
                <div class="machine-card">
                    <div class="machine-img">
                       <img src="img/risovyj_traktor.jpg" class="img-fluid" alt="Sug'orish tizimi">
                        <div class="kredit-badge">
                            <i class="fas fa-credit-card me-1"></i> KREDIT MAVJUD
                        </div>
                    </div>
                    <div class="machine-content">
                        <h3 class="machine-title">Sug'orish Tizimi</h3>
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
    </div>
    <!-- Vesitable Shop End -->
                 
    <!-- Bestsaler Product Start -->



<div class="container-fluid fruite py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h1 class="display-4">Chorva uchun eng ko‘p sotiladigan yemlar</h1>
        </div>

        <div class="row g-4">
            @foreach ($feeds as $feed)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 feed-card">
                        <div class="position-relative">
                            @if($feed->img)
                                <img src="{{ asset('storage/'.$feed->img) }}" class="feed-img" alt="{{$feed->title}}">
                            @else
                                <div class="w-100 no-img">
                                    <span class="text-muted">Rasm yo'q</span>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $feed->title }}</h5>
                            <p class="card-text">{{ $feed->description }}</p>
                            <a href="#" class="card-cost">{{$feed->cost}}$</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

        <div class="text-center mt-4">
            <a href="{{ route('view') }}" class="btn btn-warning px-4 py-2">
                View All Listings
            </a>
        </div>
        <!-- Fact Start -->
        

        <!-- Tastimonial Start -->
        

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