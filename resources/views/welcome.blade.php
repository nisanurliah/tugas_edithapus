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
        @if (session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-4">
            <h2>Data Penjualan Barang</h2>
            <a href="/create" class="btn btn-primary mb-2">Tambah Data</a>
            <table class="table table-responsive table-bordered">
                <thead>
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Penjualan</th>
                    <th>Pelanggan</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($penjualans as $penjualan)
                        <tr>
                            <td>{{ $penjualan->id }}</td>
                            <td>{{ $penjualan->nama_barang }}</td>
                            <td>{{ $penjualan->tanggal_penjualan }}</td>
                            <td>{{ $penjualan->pelanggan }}</td>
                            <td>{{ $penjualan->jumlah }}</td>
                            <td>{{ $penjualan->harga_satuan }}</td>
                            <td>{{ $penjualan->total }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="/edit/{{ $penjualan->id }}" class="btn btn-secondary">Edit</a>
                                    <form action="/delete/{{ $penjualan->id }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="Hapus">
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
