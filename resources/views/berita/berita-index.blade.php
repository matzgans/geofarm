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
            <h5 class="card-title">Data Berita</h5>
            <a href="{{route('berita.create')}}" class="btn btn-sm btn-success mb-3">Tambah Data</a>

            <table class="table table-borderless dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kontent</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $value=>$item)
                    
                        <tr>
                            <td>{{$value+1}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->konten}}</td>
                            <td>{{$item->created_at->diffForHumans()}}</td>
                            <td>
                                <a href="{{route('berita.edit', $item->id)}}" class="btn btn-warning text-light btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{route('berita.destroy', $item->id)}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection