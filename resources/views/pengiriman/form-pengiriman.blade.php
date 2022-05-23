<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>PANAS | Form Penjualan</title>
    <link rel="icon" href="{!! asset('assets/logo.ico') !!}"/>
</head>
<body>
{{--Header--}}
<header class="container-fluid p-5 bg-dark my-3 text-white">
    <h1>Form Pengiriman</h1>
</header>


<div class="container-fluid pt-4 bg-white">
    <div class="row">
    <div class="col-md-8">
    <form action="{{ route('pengiriman.store') }}" method="POST">
        <hr>
        @csrf
{{--Nama--}}
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <br>
{{--Telepon--}}
        <div class="form-group">
            <label for="telepon">No.Telepon</label>
            <input type="text" class="form-control @error('telepon') is-invalid @enderror"
                id="telepon" name="telepon" value="{{ old('telepon') }}">
            @error('telepon')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <br>
{{--Alamat--}}
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                id="alamat" name="alamat" value="{{ old('alamat') }}">
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <hr>
{{--Btn Submit--}}
    <button type="submit" class="btn btn-primary">Selesai</button>
{{--Btn Reset--}}
    <button type="reset" class="btn btn-warning">Reset</button>
    </form>
</div>
</div>
</div>
{{--Footer--}}
<footer class="container-fluid p-5 bg-dark my-3">
    {{--Btn Batal / Kembali--}}
    <a href="/" class="btn btn-danger">Batal</a>
</footer>
</body>
</html>
