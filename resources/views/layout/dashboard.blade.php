<!doctype html>
<html lang="en" data-bs-theme="auto">



<head>
    {{-- tidak ada src dibawah ini ada di folder 'original' : asset --}}
    <script src="{{ asset('bootstrap/js/color-modes.js') }}"></script>

    <title>E-Katalog Kabupaten</title>

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
        <!--isi gambar-->
        <div style="background-image: url('img/t1.png');"
            class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <div class="p-5 p-md-3 mb-4">
                    <h1 class="display-5 fw-bold text-dark">E-Katalog UMKM Kabupaten Malang</h1>
                    <br>
                    <p class="lead mb-9 text-white">sebagai salah satu strategi untuk memasarkan produk kita dengan
                        efektif dan mudah</p>
                </div>
            </div>
        </div>

        <br><br>


        <div class="my-5">
            <div class="p-5 text-center bg-body-tertiary">
                <div class="container py-5">
                    <h1 class="text-body-emphasis">49 UMKM</h1>
                    <p class="col-lg-8 mx-auto lead">
                        Anggota UMKM di kelurahan Sekarpuro, Kabupaten Malang.
                    </p>
                </div>
            </div>
        </div>

        <!--isi PRODUK BULANAN-->

        <div class="my-5">
            <div class="p-7 p-md-5 mb-7 text-bg-dark">
                <div class="col-xl-7 px-2">
                    <h1 class="p-2 p-md-9 mb-4 display-5 fw-normal ">Product Of This Month</h1>
                    <p class="lead my-1">Produk pilihan bulan ini, Segera lihat dan cek apa saja yang muncul disini.</p>
                    <br>
                    <a href="/katalog" class="btn btn-outline-light">Klik disini..</a>


                </div>

                <div class="row ">


                </div>
            </div>
        </div>

        <!--isi PRODUK TERBARU-->

        <h4 class="text-center fw-bold"> PRODUK TERBARU</h4>


        {{-- BAGIAN PRODUK --}}

        <div class="album py-5 bg-body-dark">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-5 g-3">
                    @foreach ($prod as $value)
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{ asset('storage/' . $value->gambar_produk) }}"
                                    width="265" height="265">
                                <div class="card-body">
                                    <p class="text-center fw-normal">{{ Illuminate\Support\Str::limit($value->nama_produk, 20) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <br><br>


 {{-- BAGIAN PRODUK --}}



        <h4 class="text-center fw-bold"> PRODUK TERKAIT</h4>
        <hr>

        {{-- BAGIAN PRODUK --}}

        <div class="album py-5 bg-body-dark">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-5 g-3">

                    @foreach ($pro->take(5) as $value)
                            <div class="col">
                                <div class="card h-100">
                                    <img class="card-img-top" src="{{ asset('storage/' . $value->gambar_produk) }}"
                                        width="265" height="265">
                                    <div class="card-body">
                                        <p class="text-center fw-normal">{{ Illuminate\Support\Str::limit($value->nama_produk, 20) }}</p>
                                    </div>
                                </div>
                            </div>
                    @endforeach

                </div>
            </div>
        </div>

        <br><br><br><br>

    </main>




    @section('footer')
        @include('layout.footerUtama')
    @show

    <script src="{{ asset('bootsrtap/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>


</body>

</html>
