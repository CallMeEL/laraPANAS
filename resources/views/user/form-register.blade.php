<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PANAS | Daftar Akun</title>
    <link rel="icon" href="{!! asset('assets/logo.ico') !!}"/>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
{{--Head--}}
                        <h2>Registrasi</h2>
                        <hr>

                        <form action="{{ url('/registrasi') }}" method="POST">
                            @csrf
{{--Username--}}
                            <div class="form-floating mb-3 mt-3">
                                <input type="name" class="form-control" id="name" placeholder="Enter username" name="name">
                                <label for="name">Username</label>
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
{{--Email--}}
                            <div class="form-floating mb-3 mt-3">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                <label for="email">Email</label>
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
{{--Password--}}
                            <div class="form-floating mt-3 mb-3">
                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                                <label for="password">Password</label>
                            </div>
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
{{--Show Password--}}
                            <div class="form-floating mt-3 mb-3">
                                <input type="checkbox" class="" onclick="myFunction()"> Show Password
                            </div>
{{--Button--}}
                            <button type="submit" class="btn btn-primary">Registrasi</button>
                            <p>Sudah punya akun?<a href="{{ route('login') }}" id="login">Login</a></p>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
</script>
