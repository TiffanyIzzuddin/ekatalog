<!doctype html>
<html lang="en" data-bs-theme="auto">



<head>
    {{-- tidak ada src dibawah ini ada di folder 'original' : asset --}}
    <script src="{{ asset('bootstrap/js/color-modes.js') }}"></script>

    <title>Halaman Produk Kategori</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <meta name="theme-color" content="#712cf9">


    <style>
        .img {
            display: center;
            flex-direction: column;
        }

        .kategori {
            padding-left: 5rem;
            padding-right: 3rem;
            position: center;
        }
    </style>
</head>

<body>
    @section('header')
        @include('layout.navbar')
    @show

    <main>

        <br>
        <div class="container">
            <div class="text-left">
                <p>
                    <a href="/kategori1" class="btn btn-outline-dark ">Kembali</a>
                </p>
            </div>
        </div>
        <div class=" text-center col-md-12 mt-4 pl-1">

            <div class="container ">
                <p>
                    <a></a>
                    <hr>
                </p>
            </div>

            @foreach ($kat as $value )
            <h3>Kategori: {{ $value->nama_kategori }}</h3>

            <div class="container ">
                <p>
                    {{-- <a>{{ $value->keterangan }}</a> --}}
                    <hr>
                </p>
            </div>
            @endforeach

            @foreach ($pro as $value)
            <div class="kategori">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-5 g-3 d-flex justify-content-center gap-5">
                    {{-- <a href="{{ route('produk.show', $id ) }}"> --}}
                        <div class="card h-100" style="width: 15rem;">
                            {{-- <img src="{{ asset('storage/' .  $gambar ) }}" class="img-fluid rounded-start" alt="" class="card-img-top d-flex align-items-center"> --}}
                            <h5 class="card-title p-5">{{ $value->nama_produk }}</h5>
                        </div>
                    </a>


                </div>

            </div>
            @endforeach
        </div>

        @foreach ($pro as $value)
            {{ $value->id }}
        @endforeach



    </main>
    <br> <br> <br> <br> <br> <br><br>

    @section('footer')
        @include('layout.footerUtama')
    @show




    <script src="{{ asset('bootsrtap/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>


</body>

</html>
