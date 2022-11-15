@extends('layout.dashboard-template')
@section('content')

 <div class="row">
    <div class="col-md-12 col-12">

        <div class="card">
            <div class="card-body pb-0">
                <h5 class="card-title">Data Desa</h5>
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Desa
                  </button>
                <table class="table table-borderless dataTable">
                    <thead>
                        <tr class="fw-bold">
                            <th>No</th>
                            <th>Nama Desa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-striped">
                      @foreach ($data as $value=>$item)
                          <tr>
                            <td>{{$value+1}}</td>
                            <td>{{$item->nama_desa}}</td>
                            <td>
                              <a href="{{route('desa.edit',$item->id)}}" class="btn btn-warning text-light btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                              <a href="{{route('desa.destroy',$item->id)}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>

                            </td>
                          </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>

 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Desa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('desa.store')}}" method="POST" class="row">
            @csrf
            <div class="col-md-12 col-12 mb-2">
                <label for="nama_desa" class="form-label">Nama Desa</label>
                <input type="text" name="nama_desa" class="form-control" id="nama_desa">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection