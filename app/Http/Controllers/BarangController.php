<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    function mengelola_barang() {
        return view('mengelola_barang');
    }

    function tambah_barang() {
        return view('tambah_barang');
    }
}
