@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Data Pengumuman</h5>
            <div class="card-header">
                <a href="#" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Date GMT</th>
                            <th>Judul</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @php $no = 1; @endphp
                    <tbody class="table-border-bottom-0">
                        @foreach ($berita as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $item['date'] }}</td>
                            <td>{{ $item['date_gmt'] }}</td>
                            <td>{{ $item['link'] }}</td>
                            <td><img src="#" style="width: 100px;" alt=""></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <form action="#" method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                        <li>
                                            <a href="#" class="dropdown-item">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-item">Show</a>
                                        </li>
                                        <!-- Formulir untuk hapus -->
                                        <li>
                                                <button type="submit" class="dropdown-item" data-confirm-delete="true">Delete</button>

                                        </li>
                                    </form>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
</div>

    @endsection
