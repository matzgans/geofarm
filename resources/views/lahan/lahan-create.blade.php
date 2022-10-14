<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
  </head>
  <body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">
                <div id="mapid" style="width: 100%;height:500px"></div>
            </div>
            <div class="col-md-4">
                <form action="{{route('lahan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-6 mb-2">
                            <label for="luas" class="form-label">Luas</label>
                            <input type="number" name="luas" class="form-control" id="luas">
                        </div>
                        <div class="col-md-12 col-6 mb-2">
                            <label for="petani_id" class="form-label">petani</label>
                            <select class="form-select" name="petani_id" id="petani_id" aria-label="Default select example">
                                <option selected>Petani</option>
                                @foreach ($data as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 col-6 mb-2">
                            <label for="status_pengairan" class="form-label">Status Pengairan</label>
                            <select class="form-select" name="status_pengairan" aria-label="Default select example">
                                <option selected>Pengairan</option>
                                <option value="pam">Pam</option>
                                <option value="sumur_bor">Sumur bor</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-6 mb-2">
                            <label for="lat" class="form-label">Latitude</label>
                            <input type="text" name="lat"  id="Latitude" class="form-control lat">
                        </div>
                        <div class="col-md-6 col-6 mb-2">
                            <label for="long" class="form-label">longtitude</label>
                            <input type="text" name="long" id="Longitude" class="form-control long">
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script>
        
        var curLocation=[0,0];
        if (curLocation[0]==0 && curLocation[1]==0) {
            curLocation =[0.5663641476309691, 123.117084773985];	
        }
        
        var mymap = L.map('mapid').setView([0.5663641476309691, 123.117084773985], 16);
        googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(mymap);
        
        mymap.attributionControl.setPrefix(false);
        var marker = new L.marker(curLocation, {
            draggable:'true'
        });
        
        marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position,{
            draggable : 'true'
            }).bindPopup(position).update();
            $("#Latitude").val(position.lat);
            $("#Longitude").val(position.lng).keyup();
        });
        
        $("#Latitude, #Longitude").change(function(){
            var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
            marker.setLatLng(position, {
            draggable : 'true'
            }).bindPopup(position).update();
            mymap.panTo(position);
        });
        mymap.addLayer(marker);
        
    </script>
  </body>
</html>