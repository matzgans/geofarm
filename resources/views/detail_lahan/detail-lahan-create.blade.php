
@extends('layout.dashboard-template')
@section('content')<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">
                        Tanah
                    </h5>
                    <ul class="list-item">
                        <p>luas :<span>{{$data->luas}}</span></p>
                        <p>luas :<span>{{$data->status_pengairan}}</span></p>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="card-title">Tambah Jenis Tanaman</h3>
                    <form action="{{route('detail_lahan.store',$data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-6 mb-2">
                                <label for="nama" class="form-label">nama</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                            <div class="col-md-12 col-6 mb-2">
                                <label for="tanggal_tananaman" class="form-label">Tanggal Penanaman</label>
                                <input type="date" name="tanggal_penanaman"  id="Foto Lahan" class="form-control">
                            </div>
                            <div class="col-md-12 col-6 mb-2">
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
<<<<<<< HEAD
    
</div>
@endsection
=======
@endsection
>>>>>>> b60b122bb7f2cd935100eb4c419916cc10830e1b
