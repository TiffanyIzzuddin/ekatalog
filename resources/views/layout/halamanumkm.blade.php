<!doctype html>
<html lang="en" data-bs-theme="auto">



<head>
    {{-- tidak ada src dibawah ini ada di folder 'original' : asset --}}
    <script src="{{ asset('bootstrap/js/color-modes.js') }}"></script>

    <title>UMKM 2</title>

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
        .img{
            display: flex;
            flex-direction: column;
            width: 50rem;
            height: 50rem;
        }
    </style>
</head>

<body>
        @section('header')
            @include('layout.navbar')
        @show

    <main>


    <div class="row no-gutters mt-2">
                <!--Sidebar-->
                <div class="col-md-2 bg-light mt-2 pr-3 pt-3">
                    <ul class="nav flex-column ml-3 mb-5">
                      <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="dashboard.html">Home</a><hr class="bg-secondary">
                      </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" aria-current="page" href="#">Katalog Produk</a><hr class="bg-secondary">
                        </li>
                      </ul>
                </div>

                <!--Hal. Utama-->
                <div class="col-md-10 mt-2 pl-2 pr-2">
                    <h3>Halaman UMKM</h3><hr>
                    <div class="katalog">
                        <div class="row-md-4 ">

                            <div class="row">
                                <div class="col-md-1 pr-3">
                                  <div class="card" style="width: 75rem;">
                                    <div class="card-body">
                                        <img src="img/miess_3.jpg" class="card-img-top h-50" alt="umkm">
                                      <h5 class="card-title">Nama Usaha</h5>
                                      <p class="card-text">Ini deskripsi aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                      <a href="#" class="btn btn-dark">Isi Data Diri</a>
                                    </div>
                                  </div>
                                </div>


                              </div>

                          </div>

                    </div>
                    <div class="container">
                      <span class="d-block p-1 text-bg-dark mt-3"></span>
                  </div>
                    <br>



                    <div class="row">
                        <div class="card mt-5" style="width: 75rem;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="img/miess_3.jpg" class="card-img- img-fluid rounded-start h-50" alt="umkm">
                              </div>
                              <div class="col-8">
                                <div class="card-body d-flex flex-column">
                                  <div class="h-100">
                                  <h5 class="card-title">Rin’s Kitchen</h5>
                                  <p class="card-text">Kota Malang, Dinoyo</p>
                                  <div class="btn-group" role="group" aria-label="Basic outlined example">
                                  <button type="button" class="btn btn-outline-dark">Edit</button>
                                  <button type="button" class="btn btn-outline-dark">Hapus</button>
                               </div>
                                </div>
                              </div>
                            </div>
                        </div>
                          </div>
                        </div>


                        <div class="row">
                          <div class="card mt-5" style="width: 75rem;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="img/miess_3.jpg" class="card-img- img-fluid rounded-start h-50" alt="umkm">
                              </div>
                              <div class="col-8">
                                <div class="card-body d-flex flex-column">
                                  <div class="h-100">
                                  <h5 class="card-title">Rin’s Kitchen</h5>
                                  <p class="card-text">Kota Malang, Dinoyo</p>
                                  <div class="btn-group" role="group" aria-label="Basic outlined example">
                                  <button type="button" class="btn btn-outline-dark">Edit</button>
                                  <button type="button" class="btn btn-outline-dark">Hapus</button>
                               </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>


            </div>
            <br><br>




    </main>



    <br><br>
    <div class="container">
        <p class="float-end mb-1">
            <a href="#" class="btn btn-outline-dark">Kembali ke atas</a>
        </p>

        <p class="mb-0">Cek halaman utama kami <a href="/dashboard">E-katalog</a> atau pilih <a
                href="#">Halaman Kami</a>.</p>
    </div>



    @section('footer')
    @include('layout.footerUtama')
    @show




    <script src="{{ asset('bootsrtap/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>


</body>

</html>
