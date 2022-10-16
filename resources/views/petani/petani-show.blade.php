@extends('layout.dashboard-template')
@section('content')
    @php
        $splitName = explode(' ', $data->nama, 2);
        
        $first_name = $splitName[0];
        $last_name = !empty($splitName[1]) ? $splitName[1] : '';
    @endphp

    <div class="row">
        <div class="col-xl-4">

            <div class="card" style="height: 400px">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="{{asset('foto/'.$data->foto)}}" alt="Profile" class="rounded-circle mb-3" width="150px" height="150px">
                    <h2 class="text-uppercase">{{$first_name}}</h2>
                    <h3 class="text-capitalize">{{$data->user->role}}</h3>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card" style="height: 400px;">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Data Detail</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">NIK</div>
                                <div class="col-lg-9 col-md-8">{{$data->nik}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                                <div class="col-lg-9 col-md-8">{{$data->nama}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tempat & Tanggal Lahir</div>
                                <div class="col-lg-9 col-md-8">{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Alamat</div>
                                <div class="col-lg-9 col-md-8">{{$data->alamat}}</div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">{{$data->user->email}}</div>
                            </div>
                            
                            <div class="row">
                                <div class="col pt-3">
                                  <a href="{{route('petani.index')}}" class="btn btn-danger"><i class="fa-solid fa-caret-left"></i> Kembali</a>
                                </div>
                            </div>
                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>
        </div>
    </div>

@endsection
