<html lang="en">

<head>
      {{-- tidak ada src dibawah ini ada di folder 'original' : asset --}}
      <script src="{{ asset('bootstrap/js/color-modes.js') }}"></script>
  
      <title>Profil UMKM</title>
  
      <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
      <!-- Favicons -->
      <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
      <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
      <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
      <meta name="theme-color" content="#712cf9">
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk</title>
</head>

<body>
    @section('header')
        @include('layout.navbar')
    @show
    <h3 class="my-3 mx-3" >Detail Produk</h3>
    <div class="container my-5"  style="display:flex; justify-content:center">
        <div class="card mb-3  w-100 h-75">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $produk->gambar_produk) }}" class="img-fluid rounded-start" alt="{{ $produk->nama_produk }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">{{ $produk->nama_produk }}</h3>
                        <p class="fs-5">{{ $produk->deskripsi_produk }}</p>
                        <p class="fs-5"><small class="text-body-secondary">{{ $produk->harga_produk }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <a href="{{ route('produk.index') }}" class="btn btn-dark my-3 mx-3 float-end">Detail Produk</a> --}}
    <a href="{{ route('umkm.index', $produk->id ) }}" class="btn btn-dark my-3 mx-3 float-end">Detail Produk</a>
    <a href="{{ url('/') }}" class="btn btn-dark my-3 mx-3">Kembali</a>

    @section('footer')
        @include('layout.footerUtama')
    @show
</body>

<script src="{{ asset('bootsrtap/js/bootstrap.bundle.min.js') }}"
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

</html>
