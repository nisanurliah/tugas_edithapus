<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body class="container">
        <div class="mt-4">

            <h2>Tambah Data Penjualan Barang</h2>
            <form action="/update/{{ $penjualan->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $penjualan->nama_barang }}">
                        </div>
                        <div class="form-group">
                            <label for="pelanggan">Pelanggan</label>
                            <input type="text" class="form-control" id="pelanggan" name="pelanggan" value="{{ $penjualan->pelanggan }}">
                        </div>
                        <div class="form-group">
                            <label for="harga_satuan">Harga Satuan</label>
                            <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" min="1" value="{{ $penjualan->harga_satuan }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_penjualan">Tanggal Penjualan</label>
                            <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" value="{{ $penjualan->tanggal_penjualan }}">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" value="{{ $penjualan->jumlah }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                <a href="/" type="submit" class="btn btn-danger mt-2">Kembali</a>
            </form>
        </div>
    </body>
</html>
