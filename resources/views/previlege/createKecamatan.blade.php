<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('bootstrap/docs/5.3/assets/js/color-modes.js') }}"></script>

    <title>Tambah Kecamatan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Favicons -->
    <meta name="theme-color" content="#712cf9">
    <!-- Custom styles for this template -->
    <link href="{{ asset('bootstrap/product.css') }}" rel="stylesheet">
</head>

<body>
    @section('header')
        @include('layout.navbar')
    @show

    <div class="card text-center">
        <div class="card-header">
            Create
        </div>
        <div class="card-body">
            <h5 class="card-title">Tambah data Kecamatan</h5>

            <form action="{{ route('kecamatan.store') }}" method="POST">
                {{-- <form action="/kecamatan" method="POST"> --}}
                @csrf
                <div class="mb-3">
                    <label for="nama_kecamatan" class="form-label float-start">Nama Kecamatan</label>
                    <input type="text" id="nama" name="nama_kecamatan" class="form-control" required autofocus
                        value="{{ old('nama_kecamatan') }}">

                    {{-- <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" required autofocus value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}
                </div>
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
            </form>
            <a href="{{ route('kecamatan.index') }}" class="btn btn-primary mb-3 mt-3 float-start">Daftar Kecamatan</a>
        </div>
    </div>


</body>

</html>
