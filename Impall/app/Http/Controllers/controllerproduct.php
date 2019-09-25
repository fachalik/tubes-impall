<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class controllerproduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function handphone()
    {
        $data_products = \App\product::all();
        return view('handphone',['data_product' => $data_products]);
    }
    public function sparepart()
    {
        $data_products = \App\product::all();
        return view('sparepart',['data_product' => $data_products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hcreate(Request $request)
    {
        product::create([
            'kodeproduk' => $request->kodeproduk,
            'namabarang' => $request->namabarang,
            'image' => $request->image,
            'golongan' => $request->golongan,
            'kategori' => $request->kategori,
            'merek' => $request->merek,
            'tipe' => $request->tipe,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);
        return redirect('/handphone')->with('sukses','Data berhasil terinput');
    }

    public function screate(Request $request)
    {
        product::create([
            'kodeproduk' => $request->kodeproduk,
            'namabarang' => $request->namabarang,
            'image' => $request->image,
            'golongan' => $request->golongan,
            'kategori' => $request->kategori,
            'merek' => $request->merek,
            'tipe' => $request->tipe,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);
        return redirect('/sparepart')->with('sukses','Data berhasil terinput');
    }

    public function edith($id)
    {
        $produk = \App\product::find($id);
        return view('edit',['produk' => $produk]);
    }

    public function edits($id)
    {
        $produk = \App\product::find($id);
        return view('edit',['produk' => $produk]);
    }

    public function updateh(Request $request, $id)
    {
        $produk = \App\product::find($id);
        $produk->update($request->all());
        return redirect('/handphone')->with('sukses','Data berhasil diedit');
    }

    public function updates(Request $request, $id)
    {
        $produk = \App\product::find($id);
        $produk->update($request->all());
        return redirect('/sparepart')->with('sukses','Data berhasil diedit');
    }

    public function deleteh($id)
    {
        $produk = \App\product::find($id);
        $produk->delete($produk);
        return redirect('handphone')->with('sukses','Data Berhasil Dihapus');   
    }
    public function deletes($id)
    {
        $produk = \App\product::find($id);
        $produk->delete($produk);
        return redirect('sparepart')->with('sukses','Data Berhasil Dihapus');   
    }
}
