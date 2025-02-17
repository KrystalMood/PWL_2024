<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about($nama, $nim)
    {
        return 'Nama: ' . $nama . ', NIM: ' . $nim;
    }

    public function articles($id = null)
    {
        return 'Ini adalah artikel dengan id: ' . $id;
    }
}
