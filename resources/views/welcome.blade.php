<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
  </head>
  <body>

    <div class="container mt-3">
        <div class="row">

            <div id="app" style="width:100%; height:500px;"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script>

        var map = L.map('app').setView([0.5663641476309691, 123.117084773985], 18);
    
        googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);

        @foreach($data as $item)

          L.marker([{{$item->lat}}, {{$item->long}}]).addTo(map)
            .bindPopup(
            "Pemilik : {{$item->petani->nama}} <br>"+ 
            "Luas : {{$item->luas}} <br>"+
            "Pengairan : {{$item->status_pengairan}}"+
            "kategori tanaman @foreach($item->detail_lahans as $detail) {{$detail}} @endforeach"
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

            // zoom the map to the polyline
            // map.fitBounds(polyline.getBounds());
        @endforeach

    
    </script>
  </body>
</html>