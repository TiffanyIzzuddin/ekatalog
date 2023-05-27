<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{ asset('bootstrap/docs/5.3/assets/js/color-modes.js') }}"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Favicons -->
    <meta name="theme-color" content="#712cf9">
    <!-- Custom styles for this template -->
    <link href="{{ asset('bootstrap/product.css') }}" rel="stylesheet">


    <title>Edit Index</title>
</head>

<body>
    @section('header')
        @include('layout.navbar')
    @show

    <div class="card text-center">
        <div class="card-header">
            Edit
        </div>
        <div class="card-body">
            <h5 class="card-title">Melakukan edit data kelurahan</h5>

            <form action="{{ route('kelurahan.update', $kelurahan) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_kelurahan" class="form-label float-start">Nama Kelurahan</label>
                    <input type="text" id="nama" name="nama_kelurahan" class="form-control"
                        value="{{ $kelurahan->nama_kelurahan }}">
                </div>
                <div class="mb-3">
                    <label for="kecamatan_id" class="form-label">Kecamatan</label>
                    <select class="form-select" name="kecamatan_id">

                        @foreach ($kecamatan as $value)
                            {{-- @if (old('kecamatan_id') == $value->id)
                                <option value="{{ $value->id }}" selected>{{ $value->nama_kecamatan }}</option>
                            @else --}}
                                <option value="{{ $value->id }}">{{ $value->nama_kecamatan }}</option>
                            {{-- @endif --}}
                        @endforeach

                    </select>
                </div>
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
            </form>
            <a href="{{ route('kelurahan.index') }}" class="btn btn-primary mb-3 mt-3 float-start">Home Kecamatan</a>
        </div>

    </div>
</body>

</html>
