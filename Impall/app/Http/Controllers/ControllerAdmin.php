<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{
    public function index()
    {
        return view('admin');
    }
    public function pengguna()
    {
        $data_users = \App\user::all();
        return view('pengguna',['data_users' => $data_users]);
    }
}
