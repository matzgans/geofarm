@extends('layout.dashboard-template')
@section('content')

 <div class="row">
    <div class="col-md-12 col-12">

        <div class="card">
            <div class="card-body pb-0" style="overflow-x: auto">
                <h5 class="card-title">Data Kelompok Tani</h5>
                <a href="{{route('petani.create')}}" class="btn btn-sm btn-success mb-3">Tambah Data</a>
    
                <table class="table table-borderless dataTable">
                    <thead>
                        <tr class="fw-bold">
                            <th>No</th>
                            <th>Nama Kelompok</th>
                            <th>Petani</th>
                            <th>Komoditas yang ditanam</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value=>$item)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>{{$item->nama_kelompok}}</td>
                                <td>
                                    @forelse ($item->lahans as $items)
                                        <ul>
                                            <li>{{$items->nama_petani}}</li> 
                                        </ul>
                                    @empty
                                        <span>Data kosong</span>
                                    @endforelse
                                </td>
                                <td>
                                    @forelse ($item->lahans as $items)
                                        @forelse ($items->detail_lahans as $value)
                                            <ul>
                                                <li>{{$value->nama}}</li>
                                            </ul>
                                        @empty
                                            <span>Data kosong</span>

                                        @endforelse
                                    @empty
                                        <span>Data kosong</span>
                                    @endforelse
                                </td>
                                <td>{{$item->user->email}}</td>
                                <td>
                                    <a href="{{route('petani.edit',$item->id)}}" class="btn btn-warning text-light btn-sm rounded-circle my-2"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{route('petani.destroy',$item->id)}}" class="btn btn-danger btn-sm rounded-circle"><i class="fa-solid fa-trash"></i></a>
    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>
@endsection