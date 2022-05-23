<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="icon" href="{!! asset('assets/logo.ico') !!}"/>
    <title>PANAS | Foto Profil</title>
</head>
<body>
{{--Header--}}
<header class="container-fluid p-5 bg-dark my-3 text-white">
    <h1>Upload Foto Profil</h1>
</header>


<div class="container-fluid pt-4 bg-white">
    <div class="row">
    <div class="col-md-8">
    <form action="{{ url('/file-upload') }}" method="POST"
            enctype="multipart/form-data">
        <hr>
        @csrf

        <div class="form-group">
            <label for="foto">Gambar Profil</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
            @error('foto')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <br>
        <hr>
{{--Btn Submit--}}
    <button type="submit" class="btn btn-primary">Upload</button>
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
