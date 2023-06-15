<!doctype html>
<html lang="en" data-bs-theme="auto">



<head>
    {{-- tidak ada src dibawah ini ada di folder 'original' : asset --}}
    <script src="{{ asset('bootstrap/js/color-modes.js') }}"></script>

    <title>Katalog Pengawas</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <meta name="theme-color" content="#712cf9">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

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
        <section class="py-5 text-center container">
            <div class="row py-lg-2">
                <p>
                    <a href="/umkm" class="btn btn-outline-dark">Kembali</a>
                </p>
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-bold">Administrator</h1>
                    <p class="lead text-body-secondary fw-normal">Administrator memastikan website berjalan baik untuk kesejahteraan UMKM.</p>
                </div>
            </div>
        </section>
        <div class="container ">
            <p>
                <hr>
            </p>
        </div>


        <div class="album py-5 bg-body-dark">
            <div class="container">
                <div class="row px-5 justify-content-center" >


                        <div class="card" style="max-width: 580px;">
                            <div class="row">
                              <div class="col-md-4">
                                <img src="img/d1.jpg" class="card-img- img-fluid rounded-start" alt="umkm">
                              </div>
                              <div class="col-8">
                                <div class="card-body d-flex flex-column">
                                  <div class="h-100">
                                  <h5 class="card-title">Rin’s Kitchen</h5>
                                  <p class="card-text fw-light ">Then, mix and match with additional component themes and more.</p>
                                  <p class="card-text fw-light ">Nama UMKM</p>
                                  <p class="card-text fw-light ">Alamat</p>
                                </div>
                                </div>
                              </div>
                            </div>
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
