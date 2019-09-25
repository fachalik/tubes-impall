<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halamanutamaController extends Controller
{
    public function index()
    {
        return view('katalog');
    }
    public function detail_katalog()
    {
        return view('detail_katalog');
    }
    public function keranjang()
    {
        return view('keranjang');
    }
    public function service()
    {
        return view('service');
    }
    public function service_handphone()
    {
        return view('service_handphone');
    }
    public function kendala()
    {
        return view('kendala');
    }
    public function detail_service()
    {
        return view('detail_service');
    }
}
