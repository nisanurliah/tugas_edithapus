<?php

namespace App\Http\Controllers;

use App\Models\PenjualanBarang;
use Illuminate\Http\Request;

class PenjualanBarangController extends Controller
{
    public function index()
    {
        $penjualans = PenjualanBarang::all();
        return view('welcome', compact('penjualans'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        PenjualanBarang::create([
            'nama_barang' => $request->nama_barang,
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'pelanggan' => $request->pelanggan,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan,
            'total' => $request->jumlah * $request->harga_satuan,
        ]);

        session()->flash('success', 'Data penjualan baru berhasil ditambahkan!');

        return redirect('/');
    }

    public function edit(PenjualanBarang $penjualan)
    {
        return view('edit', compact('penjualan'));
    }

    public function update(Request $request, PenjualanBarang $penjualan)
    {
        $penjualan->update([
            'nama_barang' => $request->nama_barang,
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'pelanggan' => $request->pelanggan,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $request->harga_satuan,
            'total' => $request->jumlah * $request->harga_satuan,
        ]);

        session()->flash('success', 'Data penjualan berhasil diubah!');

        return redirect('/');
    }

    public function delete(PenjualanBarang $penjualan)
    {
        $penjualan->delete();

        session()->flash('success', 'Data penjualan berhasil dihapus!');

        return redirect('/');
    }
}
