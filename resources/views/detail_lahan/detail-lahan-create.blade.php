@extends('layout.dashboard-template')
@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="card-title text-center">Tambah Jenis Tanaman</h3>
                    <form action="{{route('detail_lahan.store',$data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12 mb-2">
                                <label for="nama" class="form-label">nama</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                            <div class="col-md-12 col-12 mb-2">
                                <label for="tanggal_tananaman" class="form-label">Tanggal Penanaman</label>
                                <input type="date" name="tanggal_penanaman"  id="Foto Lahan" class="form-control">
                            </div>
                            <div class="col-md-12 col-12 mb-2">
                                <label for="foto_lahan" class="form-label">Foto Lahan</label>
                                <input type="file" name="foto_lahan"  id="Foto Lahan" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
    
</div>
@endsection
