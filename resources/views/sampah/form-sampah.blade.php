<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/halaman-beranda-css.css')}}">
    <title>PANAS | Form Sampah</title>
    <link rel="icon" href="{!! asset('assets/logo.ico') !!}"/>
</head>
<body>
{{--Header--}}
<header class="container-fluid p-5 bg-dark my-3 text-white">
    <h1>Form Penjualan Sampah</h1>
</header>


<div class="container-fluid pt-4">
    <div class="row">
    <div class="col-md-2 banner"></div>

    <div class="col-md-8 text-white">
        <div class="card">
            <div class="card-header bg-dark">
                <h3>Form Sampah</h3>
            </div>
            <div class="card-body bg-secondary">
                <form action="{{ route('sampah.store') }}" method="POST">
                    <hr>
                    @csrf
            {{--Sampah--}}
                    <div class="form-group">
                        <label for="sampah">Nama Sampah :</label>
                        <input type="text" class="form-control @error('sampah') is-invalid @enderror"
                            id="sampah" name="sampah" value="{{ old('sampah') }}">
                        @error('sampah')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>

            {{--Jenis--}}
                    <div class="form-group">
                        <label for="jenis">Jenis Sampah :</label>
                        <select class="form-control" name="jenis" id="jenis">
                            {{--PET--}}
                            <option value="PET" {{ old('jenis')=='PET' ? 'selected': '' }}>PET (Polyethylene Terephthalate)</option>
                            {{--HDPE--}}
                            <option value="HDPE" {{ old('jenis')=='HDPE' ? 'selected': '' }}>HDPE (High Densy Polyethylene)</option>
                            {{--PVC--}}
                            <option value="PVC" {{ old('jenis')=='PVC' ? 'selected': '' }}>PVC (Polyvinyl Chloride)</option>
                            {{--LDPE--}}
                            <option value="LDPE" {{ old('jenis')=='LDPE' ? 'selected': '' }}>LDPE (Low Densy Polyethylene)</option>
                            {{--PP--}}
                            <option value="PP" {{ old('jenis')=='PP' ? 'selected': '' }}>PP (Polypropylene)</option>
                            {{--PS--}}
                            <option value="PS" {{ old('jenis')=='PS' ? 'selected': '' }}>PS (Polystyrene)</option>
                            {{--Other--}}
                            <option value="Other" {{ old('jenis')=='Other' ? 'selected': '' }}>Other</option>
                        </select>
                        @error('jurusan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>

            {{--Massa Sampah--}}
                    <div class="form-group">
                        <label for="massa">Massa Sampah (Kg) :</label>
                        <input type="text" class="form-control @error('massa') is-invalid @enderror"
                            id="massa" name="massa" value="{{ old('massa') }}">
                        @error('massa')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>

            {{--Harga--}}
                    <div class="form-group">
                        <label for="harga">Harga (Rupiah) :</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror"
                            id="harga" name="harga" value="{{ old('harga') }}">
                        @error('harga')
                            <div class="text-danger">{{ $message }}</div>
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
            <div class="card-footer bg-dark">
                {{--Btn Batal / Kembali--}}
                <a href="/" class="btn btn-danger">Batal</a>
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
