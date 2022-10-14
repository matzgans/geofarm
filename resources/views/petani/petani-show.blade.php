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
                <div class="card">
                    <img src="{{ asset('foto/'.$data->foto) }}" alt="" class="img-card-fluid">
                    <div class="card-body">
                        <h5 class="text-center">{{$data->nama}}</h5>
                        <div class="content-card row justify-content-center">
                            <div class="col-md-6">
                                <table cellpadding="20">
                                    <thead>
                                        <tr>
                                            <td>Nik</td>
                                            <td>:</td>
                                            <td>{{$data->nik}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nik</td>
                                            <td>:</td>
                                            <td>{{$data->user->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Tempat, Tanggal Lahir</td>
                                            <td>:</td>
                                            <td>{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>