<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">

{{-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> --}}
{{-- <nav class="navbar navbar-dark -top bg-dark" aria-label="First navbar example"> --}}
    <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
   <div class="container-fluid">

      {{-- navbar-brand dinamis = {{ config('app.name') }} --}}
     <a class="navbar-brand" href="{{ url('/') }}">E-Katalog</a>
     <ul class="navbar-nav me-auto">

        @auth
        {{-- Setelah Login --}}


     <li class="nav-item dropdown">
        <a class="nav-link" href="#">
          Halo, {{ auth()->user()->name }}
          <span class="sr-only"></span></a>

    </li>
</ul>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarsExample01">
    <ul class="navbar-nav me-auto mb-2">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{ url('/katalog') }}"><i class="bi bi-bag"></i>&nbsp;Katalog Produk</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" aria-current="page" href="{{ url('/kategori1') }}"><i class="bi bi-box-seam"></i>&nbsp;Kategori Produk</a>
     </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/umkm') }}"><i class="bi bi-file-earmark-person"></i>&nbsp;Halaman Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ url('/about') }}"><i class="bi bi-credit-card"></i>&nbsp;Tentang Kami</a>
      </li>

      @if(Auth::user()->role_id != 2)
      @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-database-down"></i>&nbsp;Previlege administrator</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ url('/kecamatan') }}"> Data Kecamatan</a></li>
          <li><a class="dropdown-item" href="{{ url('/kelurahan') }}"> Data Kelurahan</a></li>
          <li><a class="dropdown-item" href="{{ url('/kategori') }}"> Data Kategori</a></li>
          <li><a class="dropdown-item" href="{{ url('/register') }}"> Registrasi Administrator</a></li>
        </ul>
      </li>
      @endif

      <li class="nav-item">
        <a class="nav-link ">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i>&nbsp;Log Out</li></button>
            </form></a>
      </li>

    </ul>
  </div>
</div>
</nav>


        @else

        <li class="nav-item">
            <a href="/login" class="nav-link "><i class="bi bi-box-arrow-right"></i>
          Login</a>
          </li>
    </ul>


    {{-- Sebelum Login --}}

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>




      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav me-auto mb-2">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/katalog') }}"><i class="bi bi-bag"></i>&nbsp;Katalog Produk</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" aria-current="page" href="{{ url('/kategori1') }}"><i class="bi bi-box-seam"></i>&nbsp;Kategori Produk</a>
         </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ url('/about') }}"><i class="bi bi-credit-card"></i>&nbsp;Tentang Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

        @endauth


 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

 <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
