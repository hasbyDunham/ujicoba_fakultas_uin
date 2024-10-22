@extends('layouts.backend')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang
                                @guest
                                @else
                                <b>{{Auth::user()->name}}</b>
                                @endguest! 🎉
                            </h5>

                            <p class="mb-4">
                                You have done <span class="fw-bold">72%</span> Selamat datang di halaman Dashboard
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Travisa - Visa & Immigration Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @php
    $response = Http::get('https://uinsgd.ac.id/wp-json/wp/v2/posts');
    $berita = $response->successful() ? $response->json() : [];
    // $berita = Session::get('berita');
    // $berita = $response->json();
    // dd($berita);
    // dd($berita);
    @endphp
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-0 px-lg-5 py-0 py-lg-0 ms-auto">
            <a href="" class="navbar-brand p-0">
                <h1 class="display-5 text-success mr-5"><img src="{{ asset('img/UIN-SGD.png') }}" class="img-fluid"
                        alt=""></h1>
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav py-0 ms-auto">
                    <a href="index.html" class="nav-item nav-link active">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown"><span
                                class="dropdown-toggle">Profil</span></a>
                        <div class="dropdown-menu m-0">
                            <a href="feature.html" class="dropdown-item">Feature</a>
                            <a href="countries.html" class="dropdown-item">Countries</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="training.html" class="dropdown-item">Training</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="about.html" class="nav-item nav-link">Visi & Misi</a>
                    <a href="service.html" class="nav-item nav-link">Berita</a>
                    <a href="contact.html" class="nav-item nav-link">Pengumuman</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('img/uin2.jpg') }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <img src="{{ asset('img/DEKAN-FEBI2.png') }}" alt="image"
                            class="img-fluid display-5 wow fadeInUp" data-wow-delay="0.3s"
                            style="max-width: 40%; max-height: 100%; margin-left: 55%; margin-top: 10%">
                        <div class="text-start p-4" style="max-width: 50%; margin-right: 40%">
                            <h1 class="display-3 text-capitalize text-white mb-3 wow fadeInUp" data-wow-delay="0.3s">
                                Fakultas Ekonomi dan Bisnis Islam</h1>
                            <h3 class="display-1 text-white text-capitalize mb-4 mb-md-5 fs-3 wow fadeInUp"
                                data-wow-delay="0.5s">
                                Universitas Islam Negeri <br>
                                Sunan Gunung Djati Bandung
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->



    <!-- About Start -->
    <div class="container-fluid about bg-light py-5 mb-0 mt-0">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img pb-5 ps-5">
                        <img src="{{ asset('frontend/img/mahasiswa.jpeg') }}" class="img-fluid rounded w-100"
                            style="object-fit: cover;" alt="Image">
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h1 class="display-5 mb-4">Kuliah di Fakultas Ekonomi dan Bisnis Islam</h1>
                        <p class="mb-4">Fakultas Ekonomi dan Bisnis Islam adalah jalur pendidikan yang aplikatif
                            dan sangat strategis untuk memenuhi kebutuhan bidang ekonomi khususnya sektor perbankan
                            Nasioanal serta memenuhi tantangan perkembangan dan pengembangan ilmu pengetahuan dan
                            masyarakat modern saat ini dan akan datang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Training Start -->
    <div class="container-fluid training overflow-hidden bg-light py-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4">Pimpinan Fakultas</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('img/DEKAN-FEBI.png') }}" class="img-fluid w-100 rounded" alt="Image">
                            <div class="training-title-name">
                                <h3 class="text-white mb-0">DEKAN</h3>
                            </div>
                        </div>
                        <div class="training-content bg-success rounded-bottom p-4">
                            <a href="#">
                                <h4 class="text-white">DEKAN</h4>
                            </a>
                            <p class="text-white">Dr. H. Dudang Gojali, S.Ag., M.Ag.,</p>
                            <a class="btn btn-success rounded-pill text-white p-0" href="#">Read More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('img/WADEK-FEBI1.png') }}" class="img-fluid w-100 rounded" alt="Image">
                            <div class="training-title-name">
                                <h3 class="text-white mb-0">WADEK I</h3>
                                <h5 class="text-white mb-0">Bidang Akademik</h5>
                            </div>
                        </div>
                        <div class="training-content bg-success rounded-bottom p-4">
                            <a href="#">
                                <h4 class="text-white">WADEK I</h4>
                            </a>
                            <p class="text-white">Dr. Ecep Ismail, S.Ag., M.Ag.</p>
                            <a class="btn btn-success rounded-pill text-white p-0" href="#">Read More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('img/WADEK-FEBI2.png') }}" class="img-fluid w-100 rounded" alt="Image">
                            <div class="training-title-name">
                                <h3 class="text-white mb-0">WADEK II</h3>
                                <h5 class="text-white mb-0">Administrasi Perencanaan Bidang Umum, dan Keuangan</h5>
                            </div>
                        </div>
                        <div class="training-content bg-success rounded-bottom p-4">
                            <a href="#">
                                <h4 class="text-white">WADEK II</h4>
                            </a>
                            <p class="text-white">Dr. Muhammad Zaky, M.Si.</p>
                            <a class="btn btn-success rounded-pill text-white p-0" href="#">Read More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('img/WADEK-FEBI3.png') }}" class="img-fluid w-100 rounded" alt="Image">
                            <div class="training-title-name">
                                <h3 class="text-white mb-0">WADEK III</h3>
                                <h5 class="text-white mb-0">Bidang Kemahasiswaan, Alumni dan Kerja</h5>
                            </div>
                        </div>
                        <div class="training-content bg-success rounded-bottom p-4">
                            <a href="#">
                                <h4 class="text-white">WADEK III</h4>
                            </a>
                            <p class="text-white">Dr. Iwan Setiawan, S.Ag., M.Pd., M.E.Sy.</p>
                            <a class="btn btn-success rounded-pill text-white p-0" href="#">Read More <i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a class="btn btn-success border-success rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.10s"
                        href="#">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Training End -->


    <!-- Contact Start -->
    <div class="container-fluid contact overflow-hidden pb-5">
        <div class="container py-5">
            <div class="office pt-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="display-6 mb-4">Berita UIN Sunan Gunung Djati Bandung</h2>
                </div>

                <div class="row g-4 justify-content-center">
                    @foreach ($berita as $item)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                @if (!empty($item['yoast_head_json']['og_image']) &&
                                is_array($item['yoast_head_json']['og_image']) &&
                                isset($item['yoast_head_json']['og_image'][0]['url']))
                                <img src="{{ $item['yoast_head_json']['og_image'][0]['url'] }}" class="img-fluid w-100 rounded" alt="Gambar berita">
                            @else
                                <img src="{{ asset('default.png') }}" class="img-fluid w-100 rounded" alt="Gambar berita">
                            @endif
                            </div>
                            <div class="office-content d-flex flex-column">
                                {{-- <h4 class="mb-2">{{ $item['id'] ?? 'No ID' }}</h4> --}}
                                <a href="#" class="text-secondary fs-5 mb-2">{{ $item['yoast_head_json']['title'] ?? 'No
                                    Title' }}</a>
                                <p class="mb-0">{{ $item['date'] ?? 'No Date' }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- @foreach ($berita as $item)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="office-item p-4">
                            <div class="office-img mb-4">
                                <img src="{{ $item['image'] ?? 'default.jpg' }}" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="office-content d-flex flex-column">
                                <h4 class="mb-2">{{ $item['id'] ?? 'No ID' }}</h4>
                                <a href="#" class="text-secondary fs-5 mb-2">{{ ($item['content'] ['rendered']) }} </a>
                                <a href="#" class="text-muted fs-5 mb-2">{{ $item['email'] ?? 'No Email' }}</a>
                                <p class="mb-0">{{ $item['date'] ?? 'No Date' }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Features Start -->
    <div class="container-fluid features overflow-hidden py-5">
        <div class="container">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">Why Choose Us</h5>
                </div>
                <h1 class="display-5 mb-4">Offer Tailor Made Services That Our Client Requires</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at
                    atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                    necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row g-4 justify-content-center text-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-dollar-sign fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">Cost-Effective</h5>
                            <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum
                                accusamus,</p>
                            <a class="btn btn-secondary rounded-pill" href="#">Read More<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fab fa-cc-visa fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">Visa Assistance</h5>
                            <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum
                                accusamus,</p>
                            <a class="btn btn-secondary rounded-pill" href="#">Read More<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-atlas fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">Faster Processing</h5>
                            <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum
                                accusamus,</p>
                            <a class="btn btn-secondary rounded-pill" href="#">Read More<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="feature-item text-center p-4">
                        <div class="feature-icon p-3 mb-4">
                            <i class="fas fa-users fa-4x text-primary"></i>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-3">Direct Interviews</h5>
                            <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum
                                accusamus,</p>
                            <a class="btn btn-secondary rounded-pill" href="#">Read More<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp"
                        data-wow-delay="0.1s" href="#">More Features</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->



    <!-- Countries We Offer Start -->
    <div class="container-fluid country overflow-hidden py-5">
        <div class="container">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">COUNTRIES WE OFFER</h5>
                </div>
                <h1 class="display-5 mb-4">Immigration & visa services following Countries</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at
                    atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                    necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="country-item">
                        <div class="rounded overflow-hidden">
                            <img src="{{ asset('img/country-1.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="country-flag">
                            <img src="{{ asset('img/brazil.jpg') }}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="country-name">
                            <a href="#" class="text-white fs-4">Brazil</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="country-item">
                        <div class="rounded overflow-hidden">
                            <img src="{{ asset('img/country-2.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="country-flag">
                            <img src="{{ asset('img/india.jpg') }}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="country-name">
                            <a href="#" class="text-white fs-4">india</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="country-item">
                        <div class="rounded overflow-hidden">
                            <img src="{{ asset('img/country-3.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="country-flag">
                            <img src="{{ asset('img/usa.jpg') }}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="country-name">
                            <a href="#" class="text-white fs-4">New York</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="country-item">
                        <div class="rounded overflow-hidden">
                            <img src="{{ asset('img/country-4.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                        <div class="country-flag">
                            <img src="{{ asset('img/italy.jpg') }}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div class="country-name">
                            <a href="#" class="text-white fs-4">Italy</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp"
                        data-wow-delay="0.1s" href="#">More Countries</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Countries We Offer End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial overflow-hidden pb-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">OUR CLIENTS RIVIEWS</h5>
                </div>
                <h1 class="display-5 mb-4">What Our Clients Say</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at
                    atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                    necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow zoomInDown" data-wow-delay="0.2s">
                <div class="testimonial-item">
                    <div class="testimonial-content p-4 mb-5">
                        <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitati eiusmod tempor incididunt.
                        </p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                            <img class="img-fluid rounded-circle" src="{{ asset('img/testimonial-1.jpg') }}" alt="img">
                        </div>
                        <div class="my-auto">
                            <h5>Person Name</h5>
                            <p class="mb-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content p-4 mb-5">
                        <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitati eiusmod tempor incididunt.
                        </p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                            <img class="img-fluid rounded-circle" src="{{ asset('img/testimonial-2.jpg') }}" alt="img">
                        </div>
                        <div class="my-auto">
                            <h5>Person Name</h5>
                            <p class="mb-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-content p-4 mb-5">
                        <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitati eiusmod tempor incididunt.
                        </p>
                        <div class="d-flex justify-content-end">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                            <img class="img-fluid rounded-circle" src="{{ asset('img/testimonial-3.jpg') }}" alt="img">
                        </div>
                        <div class="my-auto">
                            <h5>Person Name</h5>
                            <p class="mb-0">Profession</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-secondary mb-4">Contact Info</h4>
                        <a href=""><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                        <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                        <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share fa-2x text-secondary me-2"></i>
                            <a class="btn mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-secondary mb-4">Opening Time</h4>
                        <div class="mb-3">
                            <h6 class="text-muted mb-0">Mon - Friday:</h6>
                            <p class="text-white mb-0">09.00 am to 07.00 pm</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-muted mb-0">Satday:</h6>
                            <p class="text-white mb-0">10.00 am to 05.00 pm</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-muted mb-0">Vacation:</h6>
                            <p class="text-white mb-0">All Sunday is our vacation</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-secondary mb-4">Our Services</h4>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Business</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Evaluation</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Migrate</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Study</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Counselling</a>
                        <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Work / Career</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-secondary mb-4">Newsletter</h4>
                        <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="position-relative mx-auto rounded-pill">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Enter your email">
                            <button type="button"
                                class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-white"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
                    Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
