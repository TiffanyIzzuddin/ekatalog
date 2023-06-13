

    {{-- tidak ada src dibawah ini ada di folder 'original' : asset --}}
    <script src="{{ asset('bootstrap/js/color-modes.js') }}"></script>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<meta name="theme-color" content="#712cf9">

@section('header')
@include('layout.navbar')
@show

<style>
    .form-signin {
      max-width: 330px;
      padding: 15px;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }


        </style>


@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<main class="form-signin w-100 m-auto">
    <form action="/login" method="post">
        @csrf
      <h1 class="h3 mb-3 g-4 fw-bold text-center">Halo UMKM!</h1>

      <div class="form-floating">
        <input type="username" name="username" class="form-control @error ('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
      </div>

      <div class="form-floating">
        <input type="password" name="password" class="form-control @error ('password') is-invalid @enderror" id="password" placeholder="Password" required>
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
      </div>


      <button class="w-100 btn btn-lg btn-dark" type="submit">Login</button>
    </form>
    <small class="d-block text-center mt-3">Belum Registrasi? <a href="/register1">Registrasi</a></small>
  </main>




  <br><br><br><br><br><br><br><br><br><br>
<footer>
  @section('footer')
  @include('layout.footerUtama')
@show

</footer>


<script src="{{ asset('bootsrtap/js/bootstrap.bundle.min.js') }}"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
