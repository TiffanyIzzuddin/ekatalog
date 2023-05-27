<!doctype html>
<html lang="en" data-bs-theme="auto">



<head>
    {{-- tidak ada src dibawah ini ada di folder 'original' : asset --}}
    <script src="{{ asset('bootstrap/js/color-modes.js') }}"></script>

    <title>Latar Belakang</title>

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

        .btn-bd-primary {
          --bd-violet-bg: #712cf9;
          --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

          --bs-btn-font-weight: 600;
          --bs-btn-color: var(--bs-white);
          --bs-btn-bg: var(--bd-violet-bg);
          --bs-btn-border-color: var(--bd-violet-bg);
          --bs-btn-hover-color: var(--bs-white);
          --bs-btn-hover-bg: #6528e0;
          --bs-btn-hover-border-color: #6528e0;
          --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
          --bs-btn-active-color: var(--bs-btn-hover-color);
          --bs-btn-active-bg: #5a23c8;
          --bs-btn-active-border-color: #5a23c8;
        }
        .bd-mode-toggle {
          z-index: 1500;
        }
.hero{
    background-color: #f8f8f8;
    overflow: hidden;
}
.heading h1{
    color: black;
    font-size: 55px;
    text-align: center;
    margin-top: 35px;
}
.container-one{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 90%;
    margin: 50px auto;
}
.hero-content{
    flex:1;
    width: 600px;
    margin: 0px 25px;
    animation: fadeInUp 2s ease;
}
.hero-content h3{
    font-size: 28px;
    margin-bottom: 20px;
    color: black;
}
.hero-content p{
    font-size: 20px;
    line-height: 1.5;
    margin-bottom: 40px;
    color: black;
}
.hero-content button{
    display: inline-block;
    background-color: black;
    color: #ffffff;
    padding: 12px 24px;
    font-size: 20px;
    border: none;
    cursor: pointer;
    transition: 0.3s ease;
}
.hero-content button:hover{
    background-color: #3d3d3d;
    transform: scale(1.1);
}
.hero-image{
    flex: 1;
    width: 600px;
    margin: auto;
    animation: fadeInRight 2s ease;
}
img{
    width: 75%;
    height: auto;
    border-radius: 10px;
}
@media screen and (max-width: 768px){
    .heading h1{
        font-size: 45px;
        margin-top: 30px;
    }
    .hero{
        margin: 0px;
    }
    .hero-content{
        width: 100%;
        margin: 35px 0px;
    }
    .hero-content h2{
        font-size: 30px;
    }
    .hero-content p{
        font-size: 18px;
        margin-bottom: 20px;
    }
    .hero-content button{
        font-size: 16px;
        padding: 8px 16px;
    }
    .hero-image{
        width: 100%;
    }
}
@keyframes fadeInUp {
    0%{
        opacity: 0;
        transform: translateY(50px);
    }
    100%{
        opacity: 1;
        transform: translateY(0px);
    }
}
@keyframes fadeInRight {
    0%{
        opacity: 0;
        transform: translateX(-50px);
    }
    100%{
        opacity: 1;
        transform: translateX(0px);
    }
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
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h2 class="fw-bold text-center">Latar Belakang</h2>
                </div>
                    <p class="lead text-body-dark mb-4">
                        Kemajuan teknologi informasi terjadi sedemikian pesat sehingga data, informasi, dan pengetahuan dapat diciptakan dengan sangat cepat dan disebarkan di seluruh lapisan masyarakat. Kemajuan teknologi informasi juga terjadi pada bidang perdagangan. Teknologi selalu dipergunakan di masyarakat sebab memiliki kelebihan-kelebihan yang menguntungkan daripada cara tradisional.</p>
                <p class="lead text-body-dark mb-4">
                    Website ini dibuat sebagai suatu perangkat lunak yang akan digunakan untuk membantu setiap UMKM (Usaha Mikro, Kecil, dan Menengah) dari Organisasi Galeri Sekarpuro, Kabupaten Malang untuk berkembang dari segi pemasaran maupun promosi. Perangkat lunak yang dikembangkan, disini dinamakan dengan E-Katalog UMKM Kabupaten Malang.</p><hr>
            </div>
        </section>

    <div class="container-one">
        <div class="hero-content">
            <h3 class="lead text-body-dark text-center">Organisasi Galeri UMKM Sekarpuro</h3>
            <p class="text-body-dark fw-light text-justify">Galeri UMKM ini menampung produk-produk UMKM Kabupaten Malang untuk dapat di promosikan kepada masyarakat setempat. Hal tersebut sangat membantu dalam pemulihan ekonomi termasuk dari UMKM sendiri.</p>
        </div>
        <div class="hero-image">
            <img src="img/umkm1.png">
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
