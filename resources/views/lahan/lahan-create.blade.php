@extends('layout.dashboard-template')
@section('content')
    <div class="container mt-3">

        <div class="card">
            <div class="card-body">
                <div class="row p-5">
                    <div class="col-md-8">
                        <div id="mapid" style="width: 100%;height:500px" class="rounded"></div>
                    </div>
                    <div class="col-md-4">
                        <form action="{{ route('lahan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-6 mb-2">
                                    <label for="nama_petani" class="form-label">Nama Petani</label>
                                    <input type="text" name="nama_petani" class="form-control" id="nama_petani" required>
                                </div>
                                <div class="col-md-12 col-6 mb-2">
                                    <label for="luas" class="form-label">Luas (Hektar)</label>
                                    <input type="number" name="luas" class="form-control" id="luas" required>
                                </div>
                                <div class="col-md-12 col-6 mb-2">
                                    <label for="status_pengairan" class="form-label">Status Pengairan</label>
                                    <select class="form-select" name="status_pengairan" aria-label="Default select example" required>
                                        <option selected disabled>Pilih Pengairan</option>
                                        <option value="pam">PDAM</option>
                                        <option value="sumur_bor">Sumur Suntik</option>
                                        <option value="sumur_bor">Irigasi</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-6 mb-2">
                                    <label for="lat" class="form-label">Latitude</label>
                                    <input type="text" name="lat" id="Latitude" class="form-control lat" required>
                                </div>
                                <div class="col-md-6 col-6 mb-2">
                                    <label for="long" class="form-label">longtitude</label>
                                    <input type="text" name="long" id="Longitude" class="form-control long" required>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <a href="{{route('lahan.index')}}" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
@section('script')
    <script>
        var curLocation = [0, 0];
        if (curLocation[0] == 0 && curLocation[1] == 0) {
            curLocation = [0.5663641476309691, 123.117084773985];
        }

        var mymap = L.map('mapid').setView([0.5663641476309691, 123.117084773985], 16);
        googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(mymap);

        mymap.attributionControl.setPrefix(false);
        var marker = new L.marker(curLocation, {
            draggable: 'true'
        });

        marker.on('dragend', function(event) {
            var position = marker.getLatLng();
            marker.setLatLng(position, {
                draggable: 'true'
            }).bindPopup(position).update();
            $("#Latitude").val(position.lat);
            $("#Longitude").val(position.lng).keyup();
        });

        $("#Latitude, #Longitude").change(function() {
            var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
            marker.setLatLng(position, {
                draggable: 'true'
            }).bindPopup(position).update();
            mymap.panTo(position);
        });
        mymap.addLayer(marker);
    </script>
@endsection
