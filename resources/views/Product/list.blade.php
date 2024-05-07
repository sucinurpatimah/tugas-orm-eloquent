<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="mx-lg-5 mt-lg-4 mb-lg-3">
        <div class="rounded bg-info pt-3 pb-3">
            <h2 class="text-left fw-bold mt-2" style="margin-left: 40px;">List Product</h2>
            <a href="{{ route('product.create') }}" class="mt-3 btn btn-lg btn-dark mx-auto"
                style="position: absolute; top: 20px; right: 300px;">Tambah Produk</a>
            <a href="{{ route('product.create') }}" class="mt-3 btn btn-lg btn-primary mx-auto"
                style="position: absolute; top: 20px; right: 485px;">Lihat Profil</a>
            <a href="{{ route('product.index') }}" class="mt-3 btn btn-lg btn-secondary mx-auto"
                style="position: absolute; top: 20px; right: 90px;">Kembali ke Produk</a>
            <table class="table table-striped mt-3" style="width: calc(100% - 80px);  margin: 0 auto;">
                <thead class="text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Berat</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php
                        $nomor = 1;
                    @endphp
                    @foreach ($products as $item)
                        <tr>
                            <th scope="row">{{ $nomor++ }}</th>
                            <td>{{ $item->Nama }}</td>
                            <td>{{ $item->Stok }}</td>
                            <td>{{ $item->Berat }}</td>
                            <td>Rp.{{ number_format($item->Harga, 0, ',', '.') }}</td>
                            <td>
                                @if ($item->Kondisi == 'Baru')
                                    <p class="my-auto rounded py-1 bg-success px-2 fw-semibold btn"
                                        style="font-size: 16px">
                                        {{ $item->Kondisi }}
                                    </p>
                                @else
                                    <p class="my-auto rounded py-1 bg-dark text-white px-2 fw-semibold btn"
                                        style="font-size: 16px">
                                        {{ $item->Kondisi }}
                                    </p>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('product.edit', $item->id) }}" class="btn btn-warning">Update</a>
                                <form action="{{ route('product.destroy', $item->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
