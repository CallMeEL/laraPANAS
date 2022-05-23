<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{!! asset('assets/logo.ico') !!}"/>
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous"
        />
        <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('assets/halaman-beranda-css.css')}}">
    <title>PANAS | Konfirmasi</title>
</head>
<body>

    <div class="container-fluid p-3 bg-dark"></div>
    @forelse($data as $datas)
    <div class="row banner">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-white">
            <div class="card">
                <div class="card-header bg-dark">
                    <b><h3>ID Pesanan #{{$datas->id}}</h3></b>
                </div>
                <div class="card-body bg-secondary">
                    <p>Transaksi oleh  : {{$datas->name}}</p>
                    <p>Telepon         : {{$datas->telepon}}</p>
                    <p>Alamat          : {{$datas->alamat}}</p>
                    <hr>
                    <p>Nama Sampah : {{$datas->sampah}}</p>
                    <p>Jenis Sampah : {{$datas->jenis}}</p>
                    <p>Massa Sampah : {{$datas->massa}} Kg</p>
                    <p>Harga Sampah : Rp. {{$datas->harga}}</p>
                    <hr>
                    <h6 class="alert alert-danger">{{$datas->confirm == '0' ? 'Belum Terkonfirmasi' : 'Terkonfirmasi'}}</h6>
                    <hr>
                </div>
                <div class="card-footer bg-dark">
                    <div class="row">
                        <div class="col-sm-2">
                            <form action="{{ route('admin.konfirmasiUser', ['sampah' => $datas->id]) }}" method="post">
                                @method('PATCH')
                                @csrf
                                <button type="submit" class="btn btn-success mb-2">Konfirmasi</button>
                            </form>
                        </div>
                        <div class="col-sm-2">
                            <form action="{{ route('admin.destroy', ['sampah' => $datas->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger mb-2">Hapus</button>
                            </form>
                        </div>
                        <div class="col-sm-2">
                            <a href="/admin-konfirmasi" class="btn btn-secondary mb-2">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    {{-- <div class="row">
        <div class="col-md-2">
            <h4>ID Transaksi {{$datas->id}}</h4>
            <hr>
            <form action="{{ route('admin.konfirmasiUser', ['sampah' => $datas->id]) }}" method="post">
                @method('PATCH')
                @csrf
                <button type="submit" class="btn btn-primary mb-2">Konfirmasi</button>
                <a href="/admin-konfirmasi" class="btn btn-secondary mb-2">Kembali</a>
            </form>
        </div>
        <div class="col-md-8">

        <p>Transaksi oleh  : {{$datas->name}}</p>
        <p>Telepon         : {{$datas->telepon}}</p>
        <p>Alamat          : {{$datas->Alamat}}</p>
        <hr>
        <h6>{{$datas->confirm == '0' ? 'Belum Terkonfirmasi' : 'Terkonfirmasi'}}</h6>
        <hr>
        <div class="col-md-8">
            <ul>
                <li>Nama Sampah : {{$datas->sampah}}</li>
                <li>Jenis Sampah : {{$datas->jenis}}</li>
                <li>Massa Sampah : {{$datas->massa}}</li>
                <li>Harga Sampah : {{$datas->harga}}</li>
            </ul>
        </div>
        </div>
    </div> --}}

    @empty
    <div class="text-center">
        <h4>Tidak ada data</h4>
    </div>
    @endforelse
<footer class="container-fluid p-3 bg-dark text-white text-center">
    <h6>Powered by PANAS</h6>
</footer>

</body>
</html>
