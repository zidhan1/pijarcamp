<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // fungsi lihat data
    public function index()
    {
        $data = Produk::all();
        return view('index', compact('data'));
    }

    // fungsi tambah data
    public function store(Request $request)
    {
        $data = new Produk;
        $data->nama_produk = $request->nama_produk;
        $data->keterangan = $request->keterangan;
        $data->harga = $request->harga;
        $data->jumlah = $request->jumlah;
        $data->save();
        return redirect('/');
    }

    // Edit data
    public function edit($id)
    {
        $data = Produk::find($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Produk::find($id);
        $data->nama_produk = $request->nama_produk;
        $data->keterangan = $request->keterangan;
        $data->harga = $request->harga;
        $data->jumlah = $request->jumlah;
        $data->update();
        return redirect('/');
    }

    // hapus data
    public function destroy($id)
    {
        $data = Produk::find($id);
        $data->delete();
        return redirect('/');
    }
}
