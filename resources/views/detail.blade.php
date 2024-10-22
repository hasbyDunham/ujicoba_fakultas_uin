@extends('layouts.frontend')
@section('content')
<div class="container-fluid py-5">
    <div class="container py-5">
        <ol class="breadcrumb justify-content-start mb-4">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">Berita</a></li>
            <li class="breadcrumb-item active text-dark">Judul Berita</li>
        </ol>
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="mb-4">
                    <a href="#" class="h1 display-5">{{ $berita['yoast_head_json']['title'] ?? 'No Title' }}</a>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="#" class="text-dark link-hover me-3"><i class="bi bi-bookmark-fill"></i> Berita</a>
                    <a href="#" class="text-dark link-hover me-3"><i class="bi bi-clock"></i> {{
                        date('d/m/Y',strtotime($berita['date']))}}</a>
                    <a href="#" class="text-dark link-hover me-3"><i class="bi bi-person-circle"></i> Oleh {{
                        $berita['yoast_head_json']['author'] }}</a>
                </div>
                <br>
                @if(isset($berita['yoast_head_json']['og_image'][0]['url']))
                <img src="{{ $berita['yoast_head_json']['og_image'][0]['url'] }}" alt="Gambar Berita" class="img-fluid">
                @else
                <img src="No Image" alt="Gambar Tidak Tersedia" class="img-fluid">
                @endif
                {{-- <img width="750" height="350" src="https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036.jpg"
                    class="attachment-full size-full wp-image-54663" alt="" srcset="https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036.jpg 1600w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-300x169.jpg 300w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-1024x576.jpg 1024w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-768x432.jpg 768w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-1536x864.jpg 1536w,
                    https://uinsgd.ac.id/wp-content/uploads/2024/10/1728298036-650x366.jpg 650w"
                    sizes="(max-width: 1600px) 100vw, 1600px"> --}}

                <p class="my-4">{{ $berita['content']['rendered'] ?? 'No Content' }}
                </p>
                <p class="my-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic
                </p>
                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic
                    Lorem Ipsum is simply dummy
                </p>
                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ther
                    took It has survived not only five centuries, but also the leap into electronic
                </p>
                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ther
                    took It has survived not only five centuries, but also the leap into electronic
                </p>
                <p class="my-4">{{ $berita['yoast_head_json']['article_published_time'] }}
                </p>
                <div class="tab-class">
                    <div class="d-flex justify-content-between border-bottom mb-4">
                    </div>
                    <div class="tab-content">
                    </div>
                </div>
                {{-- <div class="bg-light rounded p-4 my-4">
                    <h4 class="mb-4">Tinggalkan Balasan</h4>
                    <form action="#">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <input type="text" class="form-control py-3" placeholder="Nama Lengkap">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control py-3" placeholder="Situs Web">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control py-3" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="textarea" id="" cols="30" rows="7"
                                    placeholder="Komentar"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="form-control btn btn-success py-3" type="button">Kirim Komentar</button>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
            @php
                $response = Http::get('https://uinsgd.ac.id/wp-json/wp/v2/posts');
                $berita = $response->successful() ? $response->json() : [];
                $berita = collect($berita);// Ubah array menjadi koleksi jika perlu
            @endphp
            <div class="col-lg-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="p-3 rounded border">
                            <h4 class="my-4">Berita Lainnya</h4>
                            <div class="row g-4">
                                @foreach ($berita->sortByDesc('created_at')->take(4) as $item)
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="">
                                                        @if (!empty($item['yoast_head_json']['og_image']) &&
                                                            is_array($item['yoast_head_json']['og_image']) &&
                                                            isset($item['yoast_head_json']['og_image'][0]['url']))
                                                            <img src="{{ $item['yoast_head_json']['og_image'][0]['url'] }}" class="img-fluid rounded"
                                                            alt="Image" style="width: 800px; height: 100px">
                                                        @else
                                                            <img src="{{ asset('default.png') }}" class="img-fluid w-100 rounded" alt="Gambar berita">
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <a href="{{ $item['id'] }}" class="h6">
                                                    {{ $item['yoast_head_json']['title'] }}
                                                </a>
                                                <small class="text-body d-block"><i
                                                        class="fas fa-calendar-alt me-1"></i> {{ date('d/m/Y',strtotime($item['date']))}}</small>
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
