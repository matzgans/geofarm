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
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Tanah
                    </h5>
                    <ul class="list-item">
                        <p>luas :<span>{{$data->luas}}</span></p>
                        <p>luas :<span>{{$data->status_pengairan}}</span></p>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <form action="{{route('detail_lahan.store',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-6 mb-2">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="col-md-6 col-6 mb-2">
                            <label for="foto_lahan" class="form-label">Foto Lahan</label>
                            <input type="file" name="foto_lahan"  id="Foto Lahan" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>

  </body>
</html>