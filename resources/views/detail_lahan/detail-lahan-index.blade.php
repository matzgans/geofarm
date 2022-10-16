@extends('layout.dashboard-template')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/font-awesome.min.css">


    <div class="card">
        <div class="card-body pb-0">
            <h5 class="card-title">Data Detail Lahan</h5>
            <table class="table table-striped table-hover" id="dataTable">
                <thead class="text-center">
                    <tr class="fw-bold">
                        <th>Luas</th>
                        <th>Status Pengairan</th>
                        <th>kategor Tanaman</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->luas }}</td>
                            <td>{{ $item->status_pengairan }}</td>
                            <td>
                                {{-- @if (($detailAva))
                                    <span class="badge bg-danger"> Detail Belum Ditambahkan</span>
                                @else --}}
                                <ol>
                                  @forelse($item->detail_lahans as $detail)
                                    <li class="text-start">
                                      {{$detail->nama}}
                                    </li>
                                  @empty
                                      <span class="badge bg-danger">Detail Belum Ditambahkan</span>
                                  @endforelse
                                     
                                </ol>
                                {{-- @endif --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection
