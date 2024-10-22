<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>febi uin sgd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/logo doang.png') }}" />

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
    {{-- @php
    $response = Http::get('https://uinsgd.ac.id/wp-json/wp/v2/posts');
    $berita = $response->successful() ? $response->json() : [];
    // $berita = \App\Models\Berita::orderBy('id', 'desc')->get();
    // $berita = Session::get('berita');
    // $berita = $response->json();
    // dd($berita);
    // dd($berita);
    @endphp --}}
    @php
    $response = Http::get('https://uinsgd.ac.id/wp-json/wp/v2/posts');
    $berita = $response->successful() ? $response->json() : [];
    $berita = collect($berita);// Ubah array menjadi koleksi jika perlu
    // $berita = \App\Models\Berita::orderBy('id', 'desc')->get();
    // $berita = Session::get('berita');
    // $berita = $response->json();
    // <pre>{{ var_dump($berita) }}</pre>
    // dd($berita);
    @endphp
    @php
        $pengumuman = \App\Models\Pengumuman::orderBy('id', 'asc')->get();
    @endphp
    <!-- Navbar & Hero Start -->
    @include('include.frontend.navbar')
    <!-- Navbar & Hero End -->


    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/img/uin2.jpg') }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <img src="{{ asset('frontend/img/DEKAN-FEBI2.png') }}" alt="image"
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

    <!-- About Start -->
    <div class="container-fluid about py-4 mb-0 mt-0">
        <div class="container py-4">
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


    <!-- Pimpinan Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-4">Pimpinan Fakultas</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('frontend/img/DEKAN-FEBI.png') }}" class="img-fluid w-100 rounded"
                                alt="Image">
                        </div>
                        <div class="training-content rounded-bottom p-4 text-center" style="background-color: white">
                            <h6 class="text-dark">Dr. H. Dudang Gojali, S.Ag., M.Ag.,</h6>
                            <p class="text-dark">DEKAN</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('frontend/img/WADEK-FEBI1.png') }}" class="img-fluid w-100 rounded"
                                alt="Image">
                        </div>
                        <div class="training-content rounded-bottom p-4 text-center" style="background-color: white">
                            <h6 class="text-dark">Dr. Iwan Setiawan, S.Ag., M.Pd., M.E.Sy.</h6>
                            <p class="text-dark">WADEK I <br>
                                Bidang Akademik
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('frontend/img/WADEK-FEBI2.png') }}" class="img-fluid w-100 rounded"
                                alt="Image">
                        </div>
                        <div class="training-content rounded-bottom p-4 text-center" style="background-color: white">
                            <h6 class="text-dark">Dr. Muhammad Zaky, M.Si.</h6>
                            <p class="text-dark">WADEK II <br>
                                Administrasi Perencanaan Bidang Umum, dan Keuangan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="training-item">
                        <div class="training-inner">
                            <img src="{{ asset('frontend/img/WADEK-FEBI3.png') }}" class="img-fluid w-100 rounded"
                                alt="Image">
                        </div>
                        <div class="training-content rounded-bottom p-4 text-center" style="background-color: white">
                            <h6 class="text-dark">Dr. H. Kadar Nurjaman, S.E., M.M</h6>
                            <p class="text-dark">WADEK III <br>
                                Bidang Kemahasiswaan, Alumni dan Kerja
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pimpinan End -->

    <!-- Pengumuman Start -->
    <div class="container-fluid contact overflow-hidden">
        <div class="container py-3">
            <div class="office">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4"><b>Pengumuman <br> UIN Sunan Gunung Djati Bandung</b></h3>
                </div>
                <div class="row g-4 mb-5 justify-content-center">
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
                                <a href="berita/{{ $item['id'] }}">Lihat</a>
                                {{-- <a href="berita/{{ $item->id }}">Lihat</a> --}}
                                {{-- <a href="{{ url('berita/{id}'. $item['id']) }}">Lihat</a> --}}

                            </div>
                        </div>
                    </div>
                    @endforeach
                     @foreach ($pengumuman->sortByDesc('created_at')->take(4) as $item)
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="{{ asset('/images/pengumuman/' . $item->foto) }}"
                                        class="img-fluid w-100" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">{{ $item->judul_pengumuman }}</h4>
                                    <p>{!! $item->deskripsi_pengumuman !!}</p>
                                    <a href="#" class="text-muted mb-2">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-12 text-end">
                    <a class="btn btn-success border-success rounded-pill py-3 px-5 wow fadeInUp"
                        data-wow-delay="0.10s" href="{{ url('pengumuman') }}">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Pengumuman End -->

    <!-- Berita Start -->
    <div class="container-fluid about py-3">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-flex align-items-start">
                        <h3 class="mb-4"><b>Berita UIN</b></h3>
                    </div>
                    @foreach ($berita->sortByDesc('created_at')->take(4) as $item)
                        <div class="d-flex align-items-start ">
                            <div class="about-img list-group-item d-flex align-items-center border-0">
                                @if (!empty($item['yoast_head_json']['og_image']) &&
                                is_array($item['yoast_head_json']['og_image']) &&
                                isset($item['yoast_head_json']['og_image'][0]['url']))
                                <img src="{{ $item['yoast_head_json']['og_image'][0]['url'] }}" class="img-fluid rounded"
                                alt="Image">
                            @else
                                <img src="{{ asset('default.png') }}" class="img-fluid w-100 rounded" alt="Gambar berita">
                            @endif

                            </div>
                            <div class="ms-4">
                                <h5><b><a href="berita/{{ $item['id'] }}">{{ $item['yoast_head_json']['title'] ?? 'No Title' }}</a></b></h5>
                            </div>
                        </div>
                        <hr class="w-100">
                    @endforeach
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="d-flex align-items-end">
                        <h3 class="mb-4"><b>Berita Fakultas</b></h3>
                    </div>
                    @foreach ($pengumuman->sortByDesc('created_at')->take(4) as $item)
                        <div class="d-flex align-items-start">
                            <div class="about-img">
                                <img src="{{ asset('/images/pengumuman/' . $item->foto) }}" class="img-fluid rounded"
                                    alt="Image" style="width: 150px; height: 100px">
                            </div>
                            <div class="ms-4">
                                <h4><b>{{ $item->judul_pengumuman }}</b></h4>
                            </div>
                        </div>
                        <hr class="w-100">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Berita End -->

    <!-- Footer Start -->
    @include('include.frontend.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-success btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


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
