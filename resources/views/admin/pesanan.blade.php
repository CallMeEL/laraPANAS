@extends('admin.master')
@section('title', 'Daftar Pesanan')
@section('menuPesanan', 'active')

@section('head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
@endsection

@section('content')

<header class="container-fluid p-5 bg-dark my-3 text-white">
    <h2>Daftar User Website PANAS</h2>
</header>

@if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
@endif

<div class="container-fluid bg-white">
<div class="row">
<div class="col-12">

<table class="table table-striped" id="userTable">
<thead>
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Telepon</th>
    <th>Sampah</th>
    <th>Jenis</th>
    <th>Massa (Kg)</th>
    <th>Harga (Rp)</th>
    <th>Status</th>
    </tr>
</thead>
<tbody>
    @forelse ($datas as $data)
    <tr>
    <th>{{$loop->iteration}}</th>
    <td>{{$data->name}}</td>
    <td>{{$data->alamat}}</td>
    <td>{{$data->telepon}}</td>
    <td>{{$data->sampah}}</td>
    <td>{{$data->jenis}}</td>
    <td>{{$data->massa}}</td>
    <td>{{$data->harga}}</td>
    <td>{{$data->confirm == '0' ? 'Belum Dikonfirmasi' : 'Terkonfirmasi'}}</td>
    </tr>
    @empty
    <td colspan="9" class="text-center">Tidak ada data...</td>
    @endforelse
</tbody>
</table>

<script>
$(document).ready(function(){
    $('#userTable').DataTable();
});
</script>

</div>
</div>
</div>

@endsection
