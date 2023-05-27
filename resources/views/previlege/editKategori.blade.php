<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{ asset('bootstrap/docs/5.3/assets/js/color-modes.js') }}"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Favicons -->
    <meta name="theme-color" content="#712cf9">
    <!-- Custom styles for this template -->
    <link href="{{ asset('bootstrap/product.css') }}" rel="stylesheet">


    <title>Edit Index</title>
</head>

<body>
    @section('header')
        @include('layout.navbar')
    @show

    <div class="card text-center">
        <div class="card-header">
            Edit
        </div>
        <div class="card-body">
            <h5 class="card-title">Melakukan edit data kecamatan</h5>

            <form action="{{ route('kategori.update', $kategori ) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label float-start" >Nama Kategori</label>
                    <input type="text" id="nama" name="nama_kategori" class="form-control" value="{{ $kategori->nama_kategori }}">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label float-start" >Keterangan</label>
                    <input type="text" id="nama" name="keterangan" class="form-control" value="{{ $kategori->keterangan }}">
                </div>
                    <button type="submit" class="btn btn-primary float-end">Simpan</button>
            </form>
            <a href="{{ route('kategori.index') }}" class="btn btn-primary mb-3 mt-3 float-start">Home Kecamatan</a>
        </div>
    
    </div>
</body>

</html>
