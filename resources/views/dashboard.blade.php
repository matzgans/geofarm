@extends('layout.dashboard-template')


@section('css')


@endsection

@section('content')


@if(auth()->user()->role == 'pegawai')    
    <div class="row">
        <h2 class="text-dark text-capitalize">Selamat Datang, {{auth()->user()->name}}</h2>
        <div class="col-sm-4">
            <div class="card bg-success">
                <div class="card-body">
                    <h3 class="my-3 text-light fw-bold ms-auto">Jumlah Petani</h3>
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
        <div class="col-sm-4">
            <div class="card bg-success">
                <div class="card-body">
                    <h3 class="my-3 text-light fw-bold ms-auto">Jumlah Lahan</h3>
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
@endif

<div class="row">
    @if(auth()->user()->role == 'petani')    
    <div class="row">
        <h2 class="text-dark text-capitalize">Selamat Datang, {{auth()->user()->name}}</h2>
        <div class="col-sm-4">
            <div class="card bg-success">
                <div class="card-body">
                    <h4 class="my-3 text-light fw-bold ms-auto">Jumlah Lahan Dimiliki</h4>
                    <div class="row">
                        <div class="col-5">
                            <h3 class="text-light ">{{$countLahan}}</h3>
                        </div>
                        <div class="col">
                            <h3 class="text-light fw-bold text-end"> <i class="fa-solid fa-user ms-3"></i></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card bg-success">
                <div class="card-body">
                    <h4 class="my-3 text-light fw-bold ms-auto">Jumlah Panen</h4>
                    <div class="row">
                        <div class="col-5">
                            <h3 class="text-light "></h3>
                        </div>
                        <div class="col">
                            <h3 class="text-light fw-bold text-end"> <i class="fa-solid fa-tractor"></i></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="rounded" id="myapp" style="width:100%; height:500px;"></div>
    @endif
</div>
@endsection
@section('script')
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script> --}}

<script>
    @if(auth()->user()->role == 'petani')
        var map = L.map('myapp').setView([0.5663641476309691, 123.117084773985], 18);
        googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);
        @foreach ($petanis as $item)
            L.marker([{{ $item->lat }}, {{ $item->long }}]).addTo(map)
                .bindPopup(
                    "Luas : {{ $item->luas }} <br>" +
                    "Pengairan : {{ $item->status_pengairan }} <br>"+
                    "kategori tanaman : @foreach($item->detail_lahans as $detail) {{$detail->nama}} @endforeach <br>"+
                    "<button onclick='myFunction()' id='detail' data-id='{{$item->id}}' class='btn btn-success mt-2'>Tambah Detail</button>"
                ).openPopup();

                function myFunction(){
                    var id = $('#detail').attr('data-id')
                    window.location="/detail_lahan/create/"+id+""
                }
        @endforeach
    @else
            var map = L.map('app').setView([0.5663641476309691, 123.117084773985], 16);
        
        googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);

        @foreach($data as $item)

        L.marker([{{$item->lat}}, {{$item->long}}]).addTo(map)
            .bindPopup(
            "Pemilik : {{$item->petani->nama}} <br>"+ 
            "Luas : {{$item->luas}} <br>"+
            "Pengairan : {{$item->status_pengairan}} <br>"+
            "kategori tanaman @foreach($item->detail_lahans as $detail) {{$detail->nama}}, @endforeach"
            ).openPopup();

            // latlngs = [
            //     [[0.56956843208778, 123.1192718446255],
            //     [0.5691848951373146, 123.11909884214404],
            //     [0.5690266526118511, 123.11957359313966]],
            //     [[0.56956843208778, 123.1192718446255],
            //     [0.5693914150368898, 123.11975061893465],
            //     [0.5690078780746564, 123.1195628643036],
            //     ], 
            // ];

            // var latlngs = [
            //     [[ 0.56956843208778, 123.1192718446255],
            //     [ 0.5691848951373146, 123.11909884214404],
            //     [ 0.5690266526118511, 123.11957359313966]],
            //     [[ 0.56956843208778, 123.1192718446255],
            //     [ 0.569396779190027, 123.11976939439775],
            //     [ 0.5690186063816176, 123.11957091093065]],
                
            // ];


            // var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);

            // // zoom the map to the polyline
            // map.fitBounds(polyline.getBounds());
        @endforeach
    
    @endif

        
</script>
@endsection