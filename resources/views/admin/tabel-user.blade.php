@extends('admin.master')
@section('title', 'Daftar User')
@section('menuUser', 'active')

@section('head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
@endsection

@section('content')

    <header class="container-fluid p-5 bg-dark my-3 text-white">
        <h2>Daftar User Website PANAS</h2>
    </header>

    <div class="container-fluid bg-white">
    <div class="row">
    <div class="col-12">

    <table class="table table-striped" id="userTable">
    <thead>
        <tr>
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        <tr>
        <th>{{$loop->iteration}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->is_admin == '0' ? 'Client' : 'Admin'}}</td>
        </tr>
        @empty
        <td colspan="6" class="text-center">Tidak ada data...</td>
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
