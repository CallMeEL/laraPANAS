<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets/halaman-beranda-css.css')}}">
  <title>PANAS | Data {{$sampah->nama}}</title>
  <link rel="icon" href="{!! asset('assets/logo.ico') !!}"/>
</head>
<body>
{{--Header--}}
<header class="container-fluid p-5 bg-dark my-3 text-white">
    <h1>Data "{{$sampah->sampah}}"</h1>
</header>

<div class="container-fluid pt-4">
    <div class="row">
    <div class="col-md-2 banner"></div>

    <div class="col-md-8 text-white">
        <div class="card">
            <div class="card-header bg-dark">
                <h3>Data "{{$sampah->sampah}}"</h3>
            </div>
            <div class="card-body text-black">
                <hr>
                <ul>
                    <li>ID : {{ $sampah->id }}</li>
                    <li>Nama Sampah : {{ $sampah->sampah }}</li>
                    <li>Jenis Sampah : {{ $sampah->jenis }}</li>
                    <li>Massa Sampah : {{ $sampah->massa }} Kg</li>
                    <li>Harga : Rp.{{ $sampah->harga }}</li>
                </ul>
                <hr>
            </div>
            <div class="card-footer bg-dark">
                <form action="{{ route('sampah.destroy',
                        ['sampah' => $sampah->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="{{ route('sampah.edit', ['sampah' => $sampah->id]) }}" class="btn btn-warning mb-2">Edit</a>
                        <button type="submit" class="btn btn-danger mb-2">Hapus</button>
                        <a href="{{ route('sampah.tabelsampah') }}" class="btn btn-secondary mb-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-2 banner"></div>
    </div>
</div>

{{--Footer--}}
<footer class="container-fluid p-5 bg-dark my-3 text-white text-center">
    <hr>
    All Rights Reserved &copy; 2022
</footer>

</body>
</html>
