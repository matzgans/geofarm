<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('petani.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-6 mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{$data->nama}}">
                        </div>
                        <div class="col-md-6 col-6 mb-2">
                            <label for="nik" class="form-label">Nik</label>
                            <input type="number" name="nik" class="form-control" id="nik" value="{{$data->nik}}">
                        </div>
                        <div class="col-md-6 col-6 mb-2">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="{{$data->tempat_lahir}}">
                        </div>
                        <div class="col-md-6 col-6 mb-2">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{$data->tanggal_lahir}}">
                        </div>
                        <div class="col-md-12 col-6 mb-2">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" placeholder="{{$data->alamat}}" id="alamat"></textarea>
                        </div>
                        <div class="col-md-12 col-6 mb-2">
                            <div>
                                <img src="{{ asset('foto/'.$data->foto)}}" alt="" style="width: 150px;">
                                <h5>Foto Lama</h5>
                            </div>
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" id="foto">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>