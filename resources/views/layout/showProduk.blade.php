<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk</title>
</head>

<body>
    @section('header')
        @include('layout.navbar')
    @show
    <div class="container" style="display:flex; justify-content:center">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $value->gambar_produk) }}" class="img-fluid rounded-start" alt="{{ $produk->nama_produk }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                        <p class="card-text">{{ $produk->deskripsi_produk }}</p>
                        <p class="card-text"><small class="text-body-secondary">{{ $produk->harga_produk }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('produk.index') }}" class="btn btn-primary mb-3 mt-3">Kembali</a>

    @section('footer')
        @include('layout.footerUtama')
    @show
</body>

</html>
