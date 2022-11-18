@extends('layout.dashboard-template')
@section('content')
<div class="row">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body p-4">
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
                                    <label for="nama_kelompok" class="form-label">Nama Kelompok</label>
                                    <input type="text" name="nama_kelompok" class="form-control" id="nama_kelompok" required>
                                </div>
                                <div class="col-md-6 col-12 mb-2">
                                    <label for="desa" class="form-label">Desa</label>
                                    <input type="text" name="desa" class="form-control" id="desa" required>
                                </div>
                                <div class="col-md-12 col-12 mb-2">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" name="foto" class="form-control" id="foto" required>
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