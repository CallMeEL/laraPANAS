@extends('admin.master')
@section('title', 'Konfirmasi Penjualan')
@section('menuKonfirmasi', 'active')

@section('content')

    <header class="container-fluid bg-dark p-5 my-3 text-white">
        <h2>Data Pesanan belum Terkonfirmasi</h2>
    </header>

    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif

    <div class="container-fluid bg-white">
        <div class="row">
            <div class="col-12">

                @forelse ($datas as $data)

                <div class="row">
                    <div class="col-md-2 banner"></div>
                    <div class="col-md-8 text-white">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <b><h3>ID Pesanan #{{$data->id}}</h3></b>
                            </div>
                            <div class="card-body bg-secondary">
                                <p>Transaksi oleh  : {{$data->name}}</p>
                                <p>Telepon         : {{$data->telepon}}</p>
                                <p>Alamat          : {{$data->alamat}}</p>
                                <hr>
                                <p>Nama Sampah : {{$data->sampah}}</p>
                                <p>Jenis Sampah : {{$data->jenis}}</p>
                                <p>Massa Sampah : {{$data->massa}} Kg</p>
                                <p>Harga Sampah : Rp. {{$data->harga}}</p>
                                <hr>
                                <h6 class="alert alert-danger">{{$data->confirm == '0' ? 'Belum Terkonfirmasi' : 'Terkonfirmasi'}}</h6>
                                <hr>
                            </div>
                            <div class="card-footer bg-dark">
                                <a href="{{ route('admin.konfirmasiShow', ['sampah' => $data->id] )}}" class="btn btn-warning">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 banner"></div>
                </div>
                <hr>


                {{-- <div class="row">
                    <div class="col-md-2">
                        <h4>ID Transaksi {{$data->id}}</h4>
                        <hr>
                        <a href="{{ route('admin.konfirmasiShow', ['sampah' => $data->id] )}}" class="btn btn-primary">Konfirmasi</a>
                        <form action="{{ route('admin.konfirmasiUser') }}" method="post">
                            @method('PATCH')
                            @csrf
                            <button type="submit" class="btn btn-primary">Konfirmasi</button>
                        </form>
                    </div>
                    <div class="col-md-8">

                    <p>Transaksi oleh  : {{$data->name}}</p>
                    <p>Telepon         : {{$data->telepon}}</p>
                    <p>Alamat          : {{$data->Alamat}}</p>
                    <hr>
                    <h6>{{$data->confirm == '0' ? 'Belum Terkonfirmasi' : 'Terkonfirmasi'}}</h6>
                    <hr>
                    <div class="col-md-8">
                        <ul>
                            <li>Nama Sampah : {{$data->sampah}}</li>
                            <li>Jenis Sampah : {{$data->jenis}}</li>
                            <li>Massa Sampah : {{$data->massa}}</li>
                            <li>Harga Sampah : {{$data->harga}}</li>
                        </ul>
                    </div>


                    </div>
                </div>

                <hr> --}}

                @empty
                <div class="text-center">
                    <h4>Tidak ada data</h4>
                </div>
                @endforelse

            {{-- <table class="table table-striped" id="konfirmasiTable">
            <thead>
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Sampah</th>
                <th>Jenis</th>
                <th>Massa</th>
                <th>Harga</th>
                <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($datas as $data)
                <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->telepon}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->sampah}}</td>
                <td>{{$data->jenis}}</td>
                <td>{{$data->massa}}</td>
                <td>{{$data->harga}}</td>
                <td><a href="">{{$data->confirm == '0' ? 'Konfirmasi' : 'Terkonfirmasi'}}</a></td>
                </tr>
                @empty
                <td colspan="9" class="text-center">Tidak ada data...</td>
                @endforelse
            </tbody>
            </table>

            <script>
            $(document).ready(function(){
                $('#konfirmasiTable').DataTable();
            });
            </script> --}}

            </div>
        </div>
    </div>

@endsection
