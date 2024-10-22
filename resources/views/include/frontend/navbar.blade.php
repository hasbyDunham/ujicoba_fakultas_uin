<div class="container-fluid nav-bar p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-0 px-lg-5 py-0 py-lg-0 ms-auto">
        <a href="" class="navbar-brand p-0">
            <h1 class="display-5 text-success mr-5"><img src="{{ asset('frontend/img/UIN-SGD.png') }}" class="img-fluid"
                    alt=""></h1>
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav py-0 ms-auto">
                <a href="{{ url('/beranda') }}" class="nav-item nav-link" id="home-link">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" id="profil-link" data-bs-toggle="dropdown"><span
                            class="dropdown-toggle">Profil</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('sambutandekan') }}" class="dropdown-item">Sambutan Dekan</a>
                        <a href="{{ url('sejarah') }}" class="dropdown-item">Sejarah</a>
                        <a href="{{ url('visimisi') }}" class="dropdown-item">Motto, Visi, Misi dan Tujuan</a>
                        <a href="{{ url('pimpinan') }}" class="dropdown-item">Pimpinan Fakultas</a>
                        <a href="{{ url('datadosen') }}" class="dropdown-item">Data Dosen</a>
                        <a href="#" class="dropdown-item">Data Tendik</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" id="jurusan-link" data-bs-toggle="dropdown"><span
                            class="dropdown-toggle">Jurusan</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">-</a>
                        <a href="countries.html" class="dropdown-item">-</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" id="journal-link" data-bs-toggle="dropdown"><span
                            class="dropdown-toggle">Journal</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">-</a>
                        <a href="countries.html" class="dropdown-item">-</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" id="informasi-link" data-bs-toggle="dropdown"><span
                            class="dropdown-toggle">Informasi</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('berita') }}" class="dropdown-item">Berita</a>
                        <a href="{{ url('pengumuman') }}" class="dropdown-item">Pengumuman</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" id="layanan-link" data-bs-toggle="dropdown"><span
                            class="dropdown-toggle">Layanan</span></a>
                    <div class="dropdown-menu m-0">
                        <a href="feature.html" class="dropdown-item">-</a>
                        <a href="countries.html" class="dropdown-item">-p</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="" class="navbar-brand p-0">
            <h1 class="display-5 text-success mr-5"><img src="{{ asset('frontend/img/ptipd.png') }}" class="img-fluid"
                    alt=""></h1>
        </a>
    </nav>
</div>
