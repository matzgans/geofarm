@extends('layout.dashboard-template')
@section('content')

    <body>

        <div class="card">
            <div class="card-body pb-0">
                <h5 class="card-title">Data Lahan</h5>
                <a href="{{route('lahan.create')}}" class="btn btn-sm btn-success mb-3">Tambah Data</a>

                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr class="fw-bold">
                            <th>No</th>
                            <th>Nama Petani</th>
                            <td>Luas</td>
                            <td>Status Pengairan</td>
                            <td>Di Tanam</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody class="table-striped">
                        @foreach ($data as $value=>$item)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>{{$item->nama_petani}}</td>
                                <td>{{ $item->luas }} Hektar</td>
                                <td>{{ $item->status_pengairan }}</td>
                                <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{route('lahan.edit', $item->id)}}" class="btn btn-warning text-light btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
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
