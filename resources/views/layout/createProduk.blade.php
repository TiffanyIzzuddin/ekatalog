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

    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @auth
        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
        <input type="hidden" value="{{ Auth::user()->id }}" name="umkm_id">

        @endauth


        <div class="container px-5">
            <div class="mt-5 mb-3">
                <label for="nama_produk" class="form-label">Nama produk</label>
                <input type="text" id="nama_produk" name="nama_produk" class="form-control" required autofocus
                    value="{{ old('nama_produk') }}">
            </div>
            {{-- choose dropdown --}}
            <div class="mb-3">
                <label for="kategori_id" class="form-label">Kategori Barang</label>
                <select class="form-select" name="kategori_id">
                    @foreach ($kategori as $value)
                        {{-- nilai yg diambil 'id', namun nilai yang ditampilkan 'nama' --}}
                        <option value="{{ $value->id }}">{{ $value->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="deskripsi_produk" class="form-label">Deskripsi produk</label>
                <input type="text" id="nama" name="deskripsi_produk" class="form-control" required autofocus
                    value="{{ old('deskripsi_produk') }}">
            </div>
            <div class="mb-3">
                <label for="harga_produk" class="form-label">Harga Produk</label>
                <input type="text" id="nama" name="harga_produk" class="form-control" required autofocus
                    value="{{ old('harga_produk') }}">
            </div>
            {{-- pick pic --}}
            <div class="mb-3">
                <label for="gambar_produk" class="form-label">Gambar Produk</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control" type="file" id="gambar_produk" name="gambar_produk" onchange="previewImage()">
            </div>
            <button type="submit" class="btn btn-primary float-end mb-3">Simpan</button>
            <a href="{{ route('produk.index') }}" class="btn btn-primary float-start mb-3">Kembali</a>
        </div>
    </form>

    <script>
        function previewImage() {
            const gambar_produk = document.querySelector('#gambar_produk');
            const previewImage = document.querySelector('.img-preview');

            previewImage.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar_produk.files[0]);
            oFReader.onload = function(oFREvent) {
                previewImage.src = oFREvent.target.result;
            }
        }
    </script>
</body>

</html>
