@extends('layouts.frontend')
@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item"><a href="#">Pengumuman</a></li>
                <li class="breadcrumb-item active text-dark">Judul Pengumuman</li>
            </ol>
            <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="mb-4">
                            <a href="#" class="h1 display-5">{{ $pengumuman->judul_pengumuman }}</a>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="text-dark link-hover me-3"><i
                                    class="bi bi-bookmark-fill"></i>Pengumuman</a>
                            <a href="#" class="text-dark link-hover me-3"><i class="bi bi-clock"></i>
                                {{ $pengumuman->created_at->format('d M Y') }}</a>
                            <a href="#" class="text-dark link-hover me-3"><i class="bi bi-person-circle"></i> Oleh
                                Admin</a>
                        </div>
                        <br>
                        <img src="{{ asset('/images/pengumuman/' . $pengumuman->foto) }}" class="img-fluid w-100" alt="">
                        {{-- <img width="750" height="350" src="https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036.jpg"
                    class="attachment-full size-full wp-image-54663" alt="" srcset="https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036.jpg 1600w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-300x169.jpg 300w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-1024x576.jpg 1024w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-768x432.jpg 768w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-1536x864.jpg 1536w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-650x366.jpg 650w"
                    sizes="(max-width: 1600px) 100vw, 1600px"> --}}

                        <p class="my-4">{!! $pengumuman->deskripsi_pengumuman !!}
                        </p>
                        <div class="tab-class">
                            <div class="d-flex justify-content-between border-bottom mb-4">
                            </div>
                            <div class="tab-content">
                            </div>
                        </div>
                    </div>
                @php
                $pengumuman = \App\Models\Pengumuman::orderBy('id', 'asc')->get();
                @endphp
                <div class="col-lg-4">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="p-3 rounded border">
                                <h4 class="my-4">pengumuman Lainnya</h4>
                                <div class="row g-4">
                                    @foreach ($pengumuman->sortByDesc('created_at')->take(4) as $item)
                                        <div class="col-12">
                                            <div class="row g-4 align-items-start features-item">
                                                <div class="col-4">
                                                    <div class="rounded-circle position-relative">
                                                        <div class="">
                                                            <img src="{{ asset('/images/pengumuman/' . $item->foto) }}"
                                                                class="img-fluid w-100" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="features-content d-flex flex-column">
                                                        <a href="{{ $item['id'] }}" class="h6">
                                                            {{ $item->judul_pengumuman }}
                                                        </a>
                                                        <small class="text-body d-block"><i
                                                                class="fas fa-calendar-alt me-1"></i>
                                                            </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        var navbarColor = {!! json_encode(env('NAVBAR_COLOR', 'white')) !!};
        var footerColor = {!! json_encode(env('FOOTER_COLOR', 'black')) !!};
    </script>
@endpush
