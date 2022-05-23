<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('assets/halaman-beranda-css.css')}}">
    <title>PANAS | Data Pengiriman</title>
    <link rel="icon" href="{!! asset('assets/logo.ico') !!}"/>
</head>
<body>
{{--Header--}}
<header class="container-fluid p-5 bg-dark my-3 text-white">
    <h1>Informasi Data Diri</h1>

</header>

    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif

<div class="container-fluid pt-4">
    <div class="row">
    <div class="col-md-2 banner"></div>

    <div class="col-md-8">

    @forelse ($pengirimans as $pengiriman)

    <div class="card">
        <div class="card-header bg-dark text-white">
            <h3>Data Diri Anda</h3>
        </div>
        <div class="card-body text-black">
            <hr>
            <ul>
                <li>Nama : {{$pengiriman->nama}}</li>
                <li>Telepon : {{$pengiriman->telepon}}</li>
                <li>Alamat : {{$pengiriman->alamat}}</li>
            </ul>
            <hr>
        </div>
        <div class="card-footer bg-dark">
            <a href="{{ route('pengiriman.edit', ['pengiriman' => $pengiriman->id]) }}" class="btn btn-warning">Edit</a>
            <a href="/" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    @empty

    <div class="card">
        <div class="card-header bg-dark">
            <h3>Data Diri Anda</h3>
        </div>
        <div class="card-body">
            <hr>
            <ul>
                <li>Nama : -</li>
                <li>Telepon : -</li>
                <li>Alamat : -</li>
            </ul>
            <hr>
        </div>
        <div class="card-footer bg-dark">
            <a href="{{ route('pengiriman.create') }}"><h3 class="btn btn-secondary">Buat</h3></a>
            <a href="/" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    @endforelse

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


