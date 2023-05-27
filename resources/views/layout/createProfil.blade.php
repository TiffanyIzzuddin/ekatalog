<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isi Data Diri</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="{{ asset('bootstrap/docs/5.3/assets/js/color-modes.js') }}"></script>
    <link href="{{ asset('bootstrap/product.css') }}" rel="stylesheet">
</head>

<body>

    @section('header')
        @include('layout.navbar')
    @show


    <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @auth
        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
        @endauth

        <div class="container px-5">
            <div class="mt-5 mb-3">
                <label for="nama_umkm" class="form-label">Nama usaha</label>
                <input type="text" id="nama" name="nama_umkm" class="form-control" required autofocus
                    value="{{ old('nama_umkm') }}">
            </div>
            <div class="mb-3">
                <label for="nama_pemilik" class="form-label">Nama pemilik</label>
                <input type="text" id="nama" name="nama_pemilik" class="form-control" required autofocus
                    value="{{ old('nama_umkm') }}">
            </div>
            {{-- choose dropdown --}}
            <div class="mb-3">
                <label for="kelurahan_id" class="form-label">Kelurahan/Desa</label>
                <select class="form-select" name="kelurahan_id">
                    @foreach ($kelurahan as $value)
                        {{-- nilai yg diambil 'id', namun nilai yang ditampilkan 'nama' --}}
                        <option value="{{ $value->id }}">{{ $value->nama_kelurahan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat_umkm" class="form-label">Alamat</label>
                <input type="text" id="nama" name="alamat_umkm" class="form-control" required autofocus
                    value="{{ old('alamat_umkm') }}">
            </div>
            <div class="mb-3">
                <label for="no_telp_umkm" class="form-label">No whatsapp</label>
                <input type="text" id="nama" name="no_telp_umkm" class="form-control" required autofocus
                    value="{{ old('no_telp_umkm') }}">
            </div>
            <div class="mb-3">
                <label for="url_instagram" class="form-label">Profil Instagram</label>
                <input type="text" id="nama" name="url_instagram" class="form-control" required autofocus
                    value="{{ old('url_instagram') }}">
            </div>
            <div class="mb-3">
                <label for="keterangan_umkm" class="form-label">Deskripsikan Umkm anda</label>

                <input type="text" id="nama" name="keterangan_umkm" class="form-control" required autofocus
                    value="{{ old('keterangan_umkm') }}">
            </div>
            {{-- pick pic --}}
            <div class="mb-3">
                <label for="logo_umkm" class="form-label">Post Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control" type="file" id="logo_umkm" name="logo_umkm" onchange="previewImage()">
            </div>
            <div class="mb-3">
                <label for="status_umkm" class="form-label">Status sementara</label>
                <input type="text" id="nama" name="status_umkm" class="form-control" required autofocus
                    value="{{ old('status_umkm') }}">
            </div>

            <button type="submit" class="btn btn-primary float-end mb-3">Simpan</button>
            <a href="{{ route('umkm.index') }}" class="btn btn-primary float-start mb-3">Kembali</a>
        </div>
    </form>

    <script>
        function previewImage() {
            const logo_umkm = document.querySelector('#logo_umkm');
            const previewImage = document.querySelector('.img-preview');

            previewImage.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(logo_umkm.files[0]);
            oFReader.onload = function(oFREvent) {
                previewImage.src = oFREvent.target.result;
            }
        }
    </script>
</body>

</html>
