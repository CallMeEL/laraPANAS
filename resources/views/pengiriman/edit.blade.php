<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>PANAS | Edit Data Penjualan</title>
  <link rel="icon" href="{!! asset('assets/logo.ico') !!}"/>
</head>
<body>

<header class="container-fluid p-5 bg-dark my-3 text-white">
    <h1>Edit Data Penjualan</h1>
</header>

<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <hr>

      <form action="{{ route('pengiriman.update',
            ['pengiriman' => $pengiriman->id])}}" method="POST">
            @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text"
          class="form-control @error('nama') is-invalid @enderror"
          id="nama" name="nama" value="{{ old('nama') ?? $pengiriman->nama }}">
          @error('nama')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="telepon">Nomor Telepon</label>
            <input type="text"
            class="form-control @error('telepon') is-invalid @enderror"
            id="telepon" name="telepon" value="{{ old('telepon') ?? $pengiriman->telepon }}">
            @error('telepon')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea class="form-control" id="alamat" rows="3"
          name="alamat">{{ old('alamat') ?? $pengiriman->alamat}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Update</button>
      </form>

    </div>
  </div>
</div>

<footer class="container-fluid p-5 bg-dark my-3">
</footer>

</body>
</html>
