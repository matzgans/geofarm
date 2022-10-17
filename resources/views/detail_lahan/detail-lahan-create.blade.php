@extends('layout.dashboard-template')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="col-md-4">
                <h5 class="card-title">
                    Tanah
                </h5>
                <ul class="list-item">
                    <p>luas :<span>{{ $data->luas }}</span></p>
                    <p>luas :<span>{{ $data->status_pengairan }}</span></p>
                </ul>
            </div>
            <div class="col-md-4">
                <form action="{{ route('detail_lahan.store', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-6 mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="col-md-6 col-6 mb-2">
                            <label for="foto_lahan" class="form-label">Foto Lahan</label>
                            <input type="file" name="foto_lahan" id="Foto Lahan" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
