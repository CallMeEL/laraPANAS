<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>PANAS | Data {{$pengiriman->nama}}</title>
  <link rel="icon" href="{!! asset('assets/logo.ico') !!}"/>
</head>
<body>

<header class="container-fluid p-5 bg-dark my-3 text-white">
    <h1 class="h2 mr-auto">Data {{$pengiriman->nama}}</h1>
</header>

<div class="container mt-3">
  <div class="row">
    <div class="col-12">

    <div class="pt-3">


    <form action="{{ route('pengiriman.destroy',
            ['pengiriman' => $pengiriman->id])}}" method="POST">
            @method('DELETE')
            @csrf
            <a href="{{ route('pengiriman.edit', ['pengiriman' => $pengiriman->id]) }}" class="btn btn-warning mb-2">Edit</a>
            <button type="submit" class="btn btn-danger mb-2">Hapus</button>
            <a href="{{ route('pengiriman.datapenjualan') }}" class="btn btn-secondary mb-2">Kembali</a>
    </form>
    </div>
    <hr>

    <ul>
      <li>Nama: {{$pengiriman->nama}} </li>
      <li>Nomor Telepon: {{$pengiriman->telepon}} </li>
      <li>Alamat:
          {{$pengiriman->alamat == '' ? 'N/A' : $pengiriman->alamat}}
      </li>
    </ul>

    </div>
  </div>
</div>

<footer class="container-fluid p-5 bg-dark my-3">
</footer>

</body>
</html>
