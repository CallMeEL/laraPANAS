<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <title>PANAS | Data Sampah Terjual</title>
  <link rel="icon" href="{!! asset('assets/logo.ico') !!}"/>
</head>
<body>
    <div class="container-fluid p-5 bg-dark my-3 text-white">
      <h2>Tabel Sampah Terjual</h2>
      <a href="/" class="btn btn-danger">Kembali</a>
    </div>

<div class="container mt-3">
  <div class="row">
    <div class="col-12">

    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif

    <table class="table table-striped" id="pengirimanTable">
      <thead>
        <tr>
          <th>No</th>
          <th>ID</th>
          <th>Nama Sampah</th>
          <th>Jenis</th>
          <th>Massa (Kg)</th>
          <th>Harga (Rupiah)</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($sampahs as $sampah)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td><a href="{{ route('sampah.show', ['sampah' => $sampah->id]) }}"> {{$sampah->id}}</a> </td>
          <td>{{$sampah->sampah}}</td>
          <td>{{$sampah->jenis}}</td>
          <td>{{$sampah->massa}}</td>
          <td>{{$sampah->harga}}</td>
        </tr>
        @empty
          <td colspan="6" class="text-center">Tidak ada data...</td>
        @endforelse
      </tbody>
    </table>

    <script>
      $(document).ready(function(){
        $('#pengirimanTable').DataTable();
      });
    </script>

    </div>
  </div>
</div>

{{--Footer--}}
<footer class="container-fluid p-5 bg-dark my-3 text-white text-center">
    <hr>
    All Rights Reserved &copy; 2022
</footer>

</body>
</html>


