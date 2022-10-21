@extends('layout.dashboard-template')
@section('content')

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Berita</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body pb-0">
            <h5 class="card-title">Data Petani</h5>
            <a href="{{route('berita.create')}}" class="btn btn-sm btn-success mb-3">Tambah Data</a>

            <table class="table table-borderless dataTable">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Kontent</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection