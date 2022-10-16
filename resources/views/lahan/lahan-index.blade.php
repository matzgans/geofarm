@extends('layout.dashboard-template')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/font-awesome.min.css">

    <body>

        <div class="card">
            <div class="card-body pb-0">
                <h5 class="card-title">Data Lahan</h5>
                <a href="{{route('lahan.create')}}" class="btn btn-sm btn-success mb-3">Tambah Data</a>

                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr class="fw-bold">
                            <td>Nama</td>
                            <td>Petani</td>
                            <td>Status Pengairan</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody class="table-striped">
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->luas }}</td>
                                <td>{{ $item->petani->nama }}</td>
                                <td>{{ $item->status_pengairan }}</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                                <a href="" class="btn btn-warning text-light btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
        </script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}
    </body>
@endsection
