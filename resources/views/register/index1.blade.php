

    {{-- tidak ada src dibawah ini ada di folder 'original' : asset --}}
    <script src="{{ asset('bootstrap/js/color-modes.js') }}"></script>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<meta name="theme-color" content="#712cf9">

@section('header')
@include('layout.navbar')
@show


<style>
    .form-registration {
      max-width: 330px;
      padding: 15px;
    }

    .form-registration .form-floating:focus-within {
      z-index: 2;
    }

    .form-registration input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-registration input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
        </style>

<main class="form-registration w-100 m-auto">
    <h1 class="h3 mb-3 fw-bold text-center">Silahkan Registrasi</h1>
    <form action="/register1" method="post">
        @csrf
      <div class="form-floating">
        <input type="text" name="name" class="form-control @error ('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
        <label for="name">Isi Nama</label>
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

      </div>
      <div class="form-floating">
        <input type="text" name="username" class="form-control @error ('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

          <input type="hidden" value="1" name="role_id">
      @auth
      <div class="mb-3">
        <label for="role_id" class="form-label">ROLE</label>
        <select class="form-select" name="role_id">
            @foreach ($role as $value)
                {{-- nilai yg diambil 'id', namun nilai yang ditampilkan 'nama' --}}
                <option value="{{ $value->id }}">{{ $value->name }}</option>
            @endforeach
        </select>
    </div>
    @endauth

      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error ('password') is-invalid @enderror" id="password" placeholder="Password" required >
        <label for="Password">Password</label>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

      </div>


      <button class="w-100 btn btn-lg btn-dark" type="submit">Registrasi</button>
    </form>
    <small class="d-block text-center mt-3">Sudah Registrasi? <a href="/login">Login</a></small>
  </main>


  <br><br><br><br><br>
  <footer>
    @section('footer')
    @include('layout.footerUtama')
  @show

  </footer>


  <script src="{{ asset('bootsrtap/js/bootstrap.bundle.min.js') }}"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
