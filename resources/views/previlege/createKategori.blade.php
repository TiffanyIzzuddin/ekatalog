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
            <h5 class="card-title">Tambah data Kategori</h5>

            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label float-start">Nama Kategori</label>
                    <input type="text" id="nama" name="nama_kategori" class="form-control" required autofocus
                        value="{{ old('nama_kategori') }}">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label float-start">Keterangan</label>
                    <input type="text" id="nama" name="keterangan" class="form-control" required autofocus
                        value="{{ old('keterangan') }}">
                </div>
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
            </form>
            <a href="{{ route('kategori.index') }}" class="btn btn-primary mb-3 mt-3 float-start">Daftar Kategori</a>
        </div>
    </div>
</body>

</html>
