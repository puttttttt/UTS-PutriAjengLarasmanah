<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
          $data['title'] = "Sistem Informasi Produk Pembelian dan Penjualan";
        echo view("welcome_message", $data);
    }
}
