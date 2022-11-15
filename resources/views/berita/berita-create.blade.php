@extends('layout.dashboard-template')
@section('content')
<div class="row">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body p-5">
                <div class="card-title">
                    <button onclick="history.back()" class="btn btn-sm btn-danger mb-5"><i class="fas fa-chevron-left"></i> Kembali</button>
                    <h3>Tambah Data</h3>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <form action="{{ route('petani.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12 mb-2">
                                    <label for="nama_kelompok" class="form-label">Judul</label>
                                    <input type="text" name="nama_kelompok" class="form-control" id="nama_kelompok">
                                </div>
                                <div class="col-md-6 col-6 mb-2">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" name="foto" class="form-control" id="foto">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-2">
                                    <label for="desa" class="form-label">Konten</label>
                                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection