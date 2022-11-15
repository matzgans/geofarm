@extends('layout.dashboard-template')
@section('content')

 <div class="row">
    <div class="col-md-12 col-12">

        <div class="card">
            <div class="card-body pb-0">
                <h5 class="card-title">Data Poktan</h5>
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Poktan
                  </button>
                <table class="table table-borderless dataTable">
                    <thead>
                        <tr class="fw-bold">
                            <th>No</th>
                            <th>Nama Poktan</th>
                            <th>Petani</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-striped">
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Poktan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('poktan.store')}}" method="POST" class="row">
            @csrf
            <div class="col-md-12 col-12 mb-2">
                <label for="desa_id" class="form-label">Nama Desa</label>
                <select class="form-select" name="desa_id" aria-label="Default select example" id="desa_id">
                    <option selected>Pilih Desa</option>
                    <option value="1">One</option>
                </select>
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