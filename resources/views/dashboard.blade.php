@extends('layout.dashboard-template')


@section('css')


@endsection

@section('content')


@if(auth()->user()->role == 'pegawai') 
    <div class="row">
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Petani</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$countPetani}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Petani</span>

                  </div>
                </div>
              </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Lahan</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-warning">
                    <i class="fa-solid fa-tractor"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$countLahan}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Lahan</span>

                  </div>
                </div>
              </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Di Tanam</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-warning">
                    <i class="fa-brands fa-pagelines"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$countTanam}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Di Tanam</span>

                  </div>
                </div>
              </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Sawah</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-success">
                    <i class="fa-solid fa-wheat-awn"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$countSawah}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Sawah</span>

                  </div>
                </div>
              </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Jagung</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-success">
                    <i class="fa-solid fa-seedling"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$countJagung}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Jagung</span>

                  </div>
                </div>
              </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Sayur</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-success">
                    <i class="fa-solid fa-seedling"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$countSayur}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Sayur</span>

                  </div>
                </div>
              </div>

            </div>
        </div><!-- End Sales Card -->
    </div>

    <div class="row">
    <div class="rounded" id="app" style="width:100%; height:500px;"></div>
@endif
@if(auth()->user()->role == 'petani')    
    <div class="row">
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title">Lahan</span></h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-primary">
                    <i class="fa-solid fa-tractor"></i>
                </div>
                <div class="ps-3">
                    <h6>{{$lahan1}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Lahan</span>

                </div>
                </div>
            </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title">Di Tanam</span></h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-success">
                  <i class="fa-solid fa-seedling"></i>
                </div>
                <div class="ps-3">
                    <h6>{{$countTanam}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Di Tanam</span>

                </div>
                </div>
            </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title">Sawah</span></h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-primary">
                    <i class="fa-solid fa-map"></i>
                </div>
                <div class="ps-3">
                    <h6>{{$countSawah}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Sawah  </span>

                </div>
                </div>
            </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title">Sayur</span></h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-warning">
                    <i class="fa-brands fa-pagelines"></i>
                </div>
                <div class="ps-3">
                    <h6>{{$countSayur}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Sayur</span>

                </div>
                </div>
            </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title">Padi</span></h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-warning">
                    <i class="fa-brands fa-pagelines"></i>
                </div>
                <div class="ps-3">
                    <h6>{{$countPadi}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Padi</span>

                </div>
                </div>
            </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4 ms-auto">
            <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title">Jagung</span></h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-warning">
                    <i class="fa-solid fa-wheat-awn"></i>
                </div>
                <div class="ps-3">
                    <h6>{{$countJagung}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Jagung</span>

                </div>
                </div>
            </div>

            </div>
        </div><!-- End Sales Card -->
    </div>
        <div class="rounded" id="myapp" style="width:100%; height:500px;"></div>
@endif
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
                    "Nama Pemilik : {{$item->nama_petani}} <br>"+
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