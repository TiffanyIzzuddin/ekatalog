<!doctype html>
<html lang="en" data-bs-theme="auto">



<head>
    {{-- tidak ada src dibawah ini ada di folder 'original' : asset --}}
    <script src="{{ asset('bootstrap/js/color-modes.js') }}"></script>

    <title>Katalog Barang</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <meta name="theme-color" content="#712cf9">


    <style>
        .img {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    @section('header')
        @include('layout.navbar')
    @show

    <main>
        <div style="background-image: url('img/t1.png');"
            class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <div class="p-5 p-md-3 mb-4">
                    <h1 class="display-5 fw-bold text-dark">Produk UMKM</h1>
                    <br>
                    <p class="lead mb-9 text-white">Menampilkan produk-produk hasil UMKM.</p>
                </div>
                {{-- <form action="/katalog/cari" method="GET">
                    <input class="form-control" type="search" placeholder="Search..." name="search">
                </form> --}}
            </div>
        </div>

        <div class="album py-5 bg-body-tertiary">
            <div class="container " >
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">
                @foreach ($pro as $value)

                    <div class="col">
                        <div class="card h-100" style="width: 15rem;">
                            <div class="card-header">{{ $value->nama_produk }}</div>
                            <img class="card-img-top" src="{{ asset('storage/' . $value->gambar_produk) }}" class="bg-dark" width="265" height="265">
                            <div class="card-body text-center">
                                <p class="card-text text-center">{{ Illuminate\Support\Str::limit($value->deskripsi_produk, 50) }}<br></p>
                                <small class="text-body">{{ $value->harga_produk }}</small>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('produk.show', $value->id) }}"
                                    class="btn btn-sm btn-outline-secondary mb-2 mt-2 text-start">View</a>
                            </div>
                        </div>
                    </div>

                @endforeach
                </div>
            </div>
        </div>
    </main>

    @section('footer')
        @include('layout.footerUtama')
    @show


    <script src="{{ asset('bootsrtap/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>



</body>

</html>
