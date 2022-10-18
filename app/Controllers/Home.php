<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('user/index');
    }
    public function inventaris()
    {
        return view('inventaris/inventaris_barang');
    }
    public function pengiriman_barang()
    {
        return view('pengiriman_barang/pengiriman_barang');
    }
}