<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>halamanumkm</title>
  </head>
  <body>
    <style>
      .hr-bold{
        height:12px;
      }

    </style>


            @section('header')
        @include('layout.navbar')
    @show

            <div class="row no-gutters mt-5">
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
                <div class="col-md-10 mt-3 pl-3">
                    <h3>Halaman UMKM</h3><hr>
                    <div class="katalog">
                        <div class="row-md-4">

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="card" style="width: 80rem;">
                                    <div class="card-body">
                                        <img src="img/" class="card-img-top" alt="...">
                                      <h5 class="card-title">Nama Usaha</h5>
                                      <p class="card-text">Ini deskripsi aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                                      <a href="#" class="btn btn-dark">Isi Data Diri</a>
                                    </div>
                                  </div>
                                </div>


                              </div>

                          </div>

                          <span class="d-block p-2 text-bg-dark mt-3"></span>
                    </div>
                    <br>
                    <div class="row">
                        <div class="card col-6 col-md-2" style="width: 80rem;">
                            <div class="row g-0">
                              <div class="col-6 col-md-4">
                                <img src="img/" class="card-img- img-fluid rounded-start" alt="umkm">
                              </div>
                              <div class="col-6 col-md-7">
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
                          <div class="card mt-5" style="width: 80rem;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="img/" class="card-img- img-fluid rounded-start" alt="umkm">
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

            <script src="{{ asset('bootsrtap/js/bootstrap.bundle.min.js') }}"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
