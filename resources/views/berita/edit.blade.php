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
            <h5 class="mb-0">Edit Data Berita</h5>
            <a href="{{route('berita.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
          </div>

          <div class="card-body">
            <form action="{{route('berita.update', $berita->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Berita</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('judul_berita') is-invalid @enderror"
                    value="{{ old('judul_berita', $berita->judul_berita) }}"
                    name="judul_berita" id="judul_berita">
                @error('judul_berita')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi</label>
                <div class="col-sm-10">
                    {{-- <input type="text" id="editor" class="form-control @error('deskripsi_pengumuman') is-invalid @enderror"
                    value="{{ old('deskripsi_pengumuman', $pengumuman->deskripsi_pengumuman) }}"
                    name="deskripsi_pengumuman"> --}}
                    <textarea name="deskripsi" id="deskripsi_pengumuman" cols="30" rows="10"
                     >{{$berita->deskripsi}}</textarea>
                @error('deskripsi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
              </div>
              <div class="mb-2">
                <label for="">Image</label>
                @if($berita->foto)
                <p><img src="{{ asset('image/berita/' . $berita->foto) }}" alt="Foto" width="100px"></p>
                @endif
                <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror">
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
@endsection


