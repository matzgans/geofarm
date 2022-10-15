@extends('layout.dashboard-template')
@section('title', 'Dashboard Petani')
@section('content')
 <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/font-awesome.min.css">

 
            <div class="card">
                <div class="card-body pb-0">
                    <h5 class="card-title">Data Petani</h5>
                    <a href="{{route('petani.create')}}" class="btn btn-sm btn-success mb-3">Tambah Data</a>

                    <table class="table table-hover" id="dataTable">
                        <thead>
                            <tr class="fw-bold">
                                <th>Nama</th>
                                <th>Nik</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-striped">
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->nik}}</td>
                                <td>{{$item->user->email}}</td>
                                <td>
                                    <a href="{{route('petani.show',$item->id)}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                                    <a href="{{route('petani.edit',$item->id)}}" class="btn btn-warning text-light btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{route('petani.destroy',$item->id)}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#dataTable').DataTable();
                });
            </script>
            @endsection