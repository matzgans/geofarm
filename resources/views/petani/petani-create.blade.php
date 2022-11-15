@extends('layout.dashboard-template')
@section('content')
<div class="row">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body p-5">
                <div class="card-title">
                    <h3>Tambah Data</h3>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <form action="{{ route('petani.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12 mb-2">
                                    <label for="nama_kelompok" class="form-label">Nama Kelompok</label>
                                    <input type="text" name="nama_kelompok" class="form-control" id="nama_kelompok">
                                </div>
                                <div class="col-md-6 col-12 mb-2">
                                    <label for="desa" class="form-label">Desa</label>
                                    <input type="text" name="desa" class="form-control" id="desa">
                                </div>
                                <div class="col-md-12 col-12 mb-2">
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
    </div>
</div>

@endsection