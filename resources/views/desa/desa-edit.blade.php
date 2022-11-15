@extends('layout.dashboard-template')
@section('content')

 <div class="row">
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    Edit Data
                </h5>
                <form action="{{route('desa.update', $data->id)}}" method="post" class="row justify-content-center">
                    @csrf
                    <div class="col-md-5 col-12 mb-2">
                        <label for="nama_desa" class="form-label">Nama Desa</label>
                        <input type="text" name="nama_desa" class="form-control" id="nama_desa" value="{{$data->nama_desa}}" required> 
                        <button type="submit" class="btn btn-success mt-2">Simpan</button>
                    </div>
                    <div class="col-md-12 col-12 mb-2">
                        
                    </div>
                </form>
            </div>
        </div>
        
    </div>
 </div>

 
@endsection