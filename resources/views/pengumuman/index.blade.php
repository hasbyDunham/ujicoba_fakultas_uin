@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Data Pengumuman</h5>
            <div class="card-header">
                <a href="{{ route('pengumuman.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Pengumuman</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @php $no = 1; @endphp
                    <tbody class="table-border-bottom-0">
                        @foreach ($pengumuman as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->judul_pengumuman }}</td>
                            <td>{{ $item->deskripsi_pengumuman }}</td>
                            <td><img src="{{ asset('/images/pengumuman/' . $item->foto) }}" style="width: 100px;" alt=""></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a href="{{ route('pengumuman.edit', $item->id) }}" class="dropdown-item">Edit</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pengumuman.show', $item->id) }}" class="dropdown-item">Show</a>
                                        </li>
                                        <!-- Formulir untuk hapus -->
                                        <li>
                                            <form action="{{ route('pengumuman.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                            </form>
                                        </li>
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
