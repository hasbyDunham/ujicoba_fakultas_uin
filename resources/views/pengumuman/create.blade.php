@extends('layouts.backend')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Tambah Data Pengumuman</h5>
            <a href="{{route('pengumuman.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
          </div>
          <div class="card-body">
            <form action="{{route('pengumuman.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Pengumuman</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('judul_pengumuman') is-invalid @enderror"
                    name="judul_pengumuman">
                @error('judul_pengumuman')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('deskripsi_pengumuman') is-invalid @enderror"
                    name="deskripsi_pengumuman">
                @error('deskripsi_pengumuman')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Foto</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                        name="foto">
                    @error('foto')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Basic with Icons -->
    </div>
  </div>
  <!-- / Content -->
  {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card">
                <div class="card-header">Data Produk
                    <a href="{{route('berita.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('berita.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="">Produk</label>
                                    <input type="text" class="form-control @error('judul_berita') is-invalid @enderror"
                                        name="judul_berita">
                                    @error('judul_berita')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Deskripsi</label>
                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                        name="deskripsi">
                                    @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            <div class="mb-2">
                                <button class="btn btn-sm btn-success" type="submit">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
