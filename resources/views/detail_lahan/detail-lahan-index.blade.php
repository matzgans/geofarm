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
          <div class="col-md-10">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Luas</th>
                    <th>Status Pengairan</th>
                    <th>kategor Tanaman</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $item)
                  <tr>
                    <td>{{$item->luas}}</td>
                    <td>{{$item->status_pengairan}}</td>
                    <td>
                      <ol>
                          @foreach($item->detail_lahans as $detail)
                          <li>{{$detail->nama}}</li>
                          @endforeach
                        </ol>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
          </div>
        </div>
    </div>
  </body>
</html>