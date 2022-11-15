@extends('layout.dashboard-template')
@section('content')

 <div class="row">
    <div class="col-md-12 col-12">

        <div class="card">
            <div class="card-body pb-0">
                <h5 class="card-title">Data Petani</h5>
                <a href="{{route('petani.create')}}" class="btn btn-sm btn-success mb-3">Tambah Data</a>
    
                <table class="table table-borderless dataTable">
                    <thead>
                        <tr class="fw-bold">
                            <th>Nama Kelompok</th>
                            <th>Desa</th>
                            <th>Lahan</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-striped">
                        @foreach ($data as $value=>$item)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>{{$item->nama_kelompok}}</td>
                                <td>
                                    @forelse ($item->lahans as $items)
                                        <ul>
                                            <li>{{$items->luas}}</li> 
                                        </ul>
                                    @empty
                                        <span>Data kosong</span>
                                    @endforelse
                                </td>
                                <td>{{$item->user->email}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>
@endsection