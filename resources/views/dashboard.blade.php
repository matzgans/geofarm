@extends('layout.dashboard-template')
@section('content')
@section('title', 'Dashboard')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <div class="container mt-3">
        <div class="row">
          <a href="{{route('logout')}}" class="btn btn-success">Logout</a>

<div class="row">
    <div class="col-sm-3">
        <div class="card bg-success">
            <div class="card-body">
                <h3 class="my-1 text-light fw-bold ms-auto">Jumlah Petani</h3>
                <div class="row">
                    <div class="col-5">
                        <h3 class="text-light ">{{ $countPetani }}</h3>
                    </div>
                    <div class="col">
                        <h3 class="text-light fw-bold text-end"> <i class="fa-solid fa-user ms-3"></i></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card bg-success">
            <div class="card-body">
                <h3 class="my-1 text-light fw-bold ms-auto">Jumlah Lahan</h3>
                <div class="row">
                    <div class="col-5">
                        <h3 class="text-light ">{{ $countLahan }}</h3>
                    </div>
                    <div class="col">
                        <h3 class="text-light fw-bold text-end"> <i class="fa-solid fa-tractor"></i></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="rounded" id="app" style="width:100%; height:500px;"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js"
    integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script>
    var map = L.map('app').setView([0.5663641476309691, 123.117084773985], 18);

    googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    }).addTo(map);

    @foreach ($data as $item)

        L.marker([{{ $item->lat }}, {{ $item->long }}]).addTo(map)
            .bindPopup(
                "Pemilik : {{ $item->petani->nama }} <br>" +
                "Luas : {{ $item->luas }} <br>" +
                "Pengairan : {{ $item->status_pengairan }}"
            ).openPopup();
    @endforeach
</script>
@endsection
