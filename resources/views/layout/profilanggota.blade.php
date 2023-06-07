<!doctype html>
<html lang="en" data-bs-theme="auto">



<head>
    {{-- tidak ada src dibawah ini ada di folder 'original' : asset --}}
    <script src="{{ asset('bootstrap/js/color-modes.js') }}"></script>

    <title>Profil UMKM</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>
        .img {
            width: 200px;
            height: 300px;
            object-fit: cover;
        }
    </style>

</head>

<body>
    @section('header')
        @include('layout.navbar')
    @show

    {{-- @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif --}}

    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    @foreach ($user as $value)
                        <h1 class="fw-bold">Profil UMKM</h1>
                        <h2 class="fw-bold">{{ $value->nama_pemilik }}</h2>
                    @endforeach
                    <p class="lead text-body-secondary">Profil pribadi sebagai UMKM</p>
                    <p>
                        <a href="{{ route('umkm.create') }}" class="btn btn-dark my-2">Isi Data</a>
                    </p>
                </div>
            </div>
        </section>


        <div class="container" style="display:flex; justify-content:center">
            <div class="card mb-5" style="width: 1500px; length: 500px">

                @foreach ($user as $value)
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $value->logo_umkm) }}" class="img-fluid rounded-start"
                                alt="{{ $value->nama_umkm }}"style="width: 13rem; length: 13rem;  object-fit: cover ">
                            {{-- <img src="{{ asset('img/person.jpg') }}" class="img-fluid rounded-start" alt="anggota"
                                width="200" height="200"> --}}
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $value->nama_umkm }}</h5>
                                <p class="card-text">{{ $value->nama_pemilik }}. Usaha Mikro Kecil dan Menengah
                                    {{ $value->nama_umkm }}</p>

                                @foreach ($umkm as $value)
                                    <p class="card-text">{{ $value->alamat_umkm }}</p>
                                @endforeach

                                <p class="card-text"><small class="text-body-dark">Status :
                                        {{ $value->status_umkm }}</small>
                                </p>
                                <div class="mb-2 d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('umkm.edit', $value->id) }}"
                                            class="btn btn-sm btn-outline-secondary mb-2 mt-2">edit</a>
                                        <form method="POST" action="{{ route('umkm.destroy', $value->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Apa anda yakin Data pribadi di hapus?')"
                                                class="btn btn-sm btn-outline-secondary mb-2 mt-2">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container" style="display:flex; justify-content:center">
            <div class="card mb-5" style="width: 1500px; length: 1500px">
                @foreach ($user as $value)
                    <div class="card-body">
                        <h5 class="card-title">Deskripsi :</h5>
                        <p class="card-text">{{ $value->keterangan_umkm }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><i class="bi bi-telephone"></i>&nbsp;&nbsp;Nomor yang bisa dihubungi :
                            {{ $value->no_telp_umkm }}</small><br>
                        <small class="text-muted"><i class="bi bi-instagram"></i>&nbsp;&nbsp;Instagram :
                            {{ $value->url_instagram }}</small>
                    </div>
                    {{-- <div class="mb-3 px-3 d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                    </div> --}}
                @endforeach
            </div>
        </div>
        <div class="container">
            <span class="d-block p-1 text-bg-dark mt-1"></span>
        </div>
        <br>
        <div class="text-center">
            <div>
                <h5>Daftar Produk</h5>
            </div>
            <div class="card-body">
                <a href="{{ route('produk.create') }}" class="btn btn-sm btn-outline-dark mb-2 mt-2 my-2">Isi Data
                    produk</a>
            </div>

            <div class="album py-5 bg-body-tertiary">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                        @foreach ($user1 as $value)
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-header">{{ $value->nama_produk }}</div>
                                    <img src="{{ asset('storage/' . $value->gambar_produk) }}" class="card-img-top"
                                        width="265" height="265">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="{{ route('produk.show', $value->id) }}"
                                                    class="btn btn-sm btn-outline-secondary mb-2 mt-2">View</a>
                                                <a href="{{ route('produk.edit', $value->id) }}"
                                                    class="btn btn-sm btn-outline-secondary mb-2 mt-2">Edit</a>
                                                <form method="POST"
                                                    action="{{ route('produk.destroy', $value->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Apa anda yakin {{ $value->nama_produk }} di hapus?')"
                                                        class="btn btn-sm btn-outline-secondary mb-2 mt-2">Delete</button>
                                                </form>
                                            </div>
                                            <small class="text-body-secondary">{{ $value->created_at }}</small>
                                        </div>
                                        <p class="card-text">
                                            {{ Illuminate\Support\Str::limit($value->deskripsi_produk, 50) }}<br></p>

                                    </div>
                                    <div class="card-footer">
                                        <small class="text-body-secondary">{{ $value->harga_produk }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
