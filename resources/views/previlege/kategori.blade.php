<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="{{ asset('bootstrap/docs/5.3/assets/js/color-modes.js') }}"></script>

    <title>Daftar Kecamatan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Favicons -->
    <meta name="theme-color" content="#712cf9">

    <!-- Custom styles for this template -->
    <link href="{{ asset('bootstrap/product.css') }}" rel="stylesheet">
</head>

<body>
    @section('header')
        @include('layout.navbar')
    @show

    <div class="card text-center">        

        @if (session()->has('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card-body">
            <h5 class="card-title">Daftar Jenis UMKM</h5>
            <p class="card-text">Data kategori di dalam database.</p>

            <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3 mt-3">Tambah Data</a>
            <div class="container mt-5 mb-5">
                <table class="table">
                    <thead class="table-dark">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>

                    <body>
                        @foreach ($kategori as $no => $value)
                            <tr>
                                {{-- <td>{{ $no + 1 }}</td> --}}
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->nama_kategori}}</td>
                                <td>{{ $value->keterangan}}</td>
                                <td>
                                    <a href="{{ route('kategori.edit', $value) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('kategori.destroy', $value) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Apa anda yakin Data Kategori di hapus?')"
                                            class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </body>
                </table>
            </div>
            
        </div>        
    </div>

</body>

</html>
