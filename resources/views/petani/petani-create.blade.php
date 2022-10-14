@extends('layout.dashboard-template')
@section('title','Tambah Petani')
@section('content')

<div class="card w-75 mx-auto">
    <div class="card-body p-5">
        <div class="card-title">
            <h3>Tambah Data</h3>
        </div>
        <div class="row justify-content-start">
            <div class="col-md-12">
                <form action="{{ route('petani.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-6 mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="col-md-6 col-6 mb-2">
                            <label for="nik" class="form-label">Nik</label>
                            <input type="number" name="nik" class="form-control" id="nik">
                        </div>
                        <div class="col-md-6 col-6 mb-2">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
                        </div>
                        <div class="col-md-6 col-6 mb-2">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                        </div>
                        <div class="col-md-12 col-6 mb-2">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" placeholder="alamat" id="alamat" rows="9"></textarea>
                        </div>
                        <div class="col-md-12 col-6 mb-2">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" id="foto">
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection