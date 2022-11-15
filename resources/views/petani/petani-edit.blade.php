@extends('layout.dashboard-template')
@section('content')




    <form action="{{ route('petani.update', $data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-4">
                <div class="card" style="height: 400px">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{ asset('foto/' . $data->foto) }}" alt="Profile" class="rounded-circle mb-3"
                            width="150px" height="150px">
                        <h2 class="text-capitalize">Foto</h2>
                        <input type="file" name="foto" class="form-control w-75" id="foto"
                            value="{{ $data->foto }}">
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card" style="height: 400px;">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Data
                                    Detail</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Profile Details</h5>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label ">Nama Kelompok</div>
                                    <div class="col-lg-4 col-md-8">
                                        <input type="text" name="nama_kelompok" class="form-control form-control-sm"
                                            id="nama_kelompok" value="{{ $data->nama_kelompok }}">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-3 col-md-4 label">Desa</div>
                                    <div class="col-lg-4 col-md-8">
                                        <input type="text" name="desa" class="form-control form-control-sm"
                                            id="desa" value="{{ $data->desa }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2 mt-3">
                                        <button onclick="history.back()" class="btn btn-danger"><i
                                                class="fa-solid fa-caret-left"></i> Kembali</button>
                                    </div>
                                    <div class="col mt-3">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
