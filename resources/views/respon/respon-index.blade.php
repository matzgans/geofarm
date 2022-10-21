@extends('layout.dashboard-template')
@section('content')

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Responden</h5>
                            <table class="table table-hover dataTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama Responden</th>
                                        <th>Email</th>
                                        <th>Respon</th>
                                        <th>Luas</th>
                                        <th>Petani</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $index=>$item)
                                    <tr>
                                        <td>{{++$index}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->response}}</td>
                                        <td>{{$item->lahan->luas}}</td>
                                        <td>{{$item->lahan->petani->nama}}</td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                                            <a href="" class="btn btn-warning btn-sm"><i class="fa-solid fa-edit"></i></a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}
    </body>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endsection
