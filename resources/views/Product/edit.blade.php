<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Form Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-lg-3">
        @if (Session::has('error'))
            <div class="col-md-6 offset-3 bg-danger rounded px-3 py-2 text-white my-3">
                <h1 class="fw-bold" style="font-size: 20px">{{ Session::get('error') }}</h1>
            </div>
        @endif
        <div class="row">
            <div class="col-md-6 offset-3 bg-info rounded py-3">
                <h1 class="text-center fw-bold">Edit Data Produk</h1>
                <form class="mx-1 my-3" action="{{ route('product.update', ['id' => $products->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Gambar</label>
                        <input type="text" class="form-control" name="Gambar" value="{{ $products->Gambar }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Nama Produk</label>
                        <input type="text" class="form-control" name="Nama" value="{{ $products->Nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Berat</label>
                        <input type="number" class="form-control" name="Berat" value="{{ $products->Berat }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Harga</label>
                        <input type="number" class="form-control" name="Harga" value="{{ $products->Harga }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Stok</label>
                        <input type="number" class="form-control" name="Stok" value="{{ $products->Stok }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Kondisi Barang</label>
                        <select class="form-select" name="Kondisi" id="">
                            <option value="0" {{ $products->Kondisi == 0 ? 'selected' : '' }}>Pilih kondisi Barang
                            </option>
                            <option value="Baru" {{ $products->Kondisi == 'Baru' ? 'selected' : '' }}>Baru</option>
                            <option value="Bekas" {{ $products->Kondisi == 'Bekas' ? 'selected' : '' }}>Bekas</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control" name="Deskripsi" rows="3">{{ $products->Deskripsi }}</textarea>
                    </div>
                    <div class="d-flex">
                        <button class=" mt-3 btn btn-lg btn-dark mx-auto" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
