<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index()
    {
        // menampilkan seluruh produk
        $pro = Produk::all();
        return view('layout.katalog', compact('pro'));
    }

    public function indexes()
    {
        // menampilkan 5 produk terbaru
        $prod = Produk::latest()->take(5)->get();
        // menampilkan seluruh produk
        $pro = Produk::all();
        return view('layout.dashboard', compact('pro', 'prod'));
    }

    public function kategori(){
        // menampilkan seluruh kategori
        // $kat = DB::table('kategori')->get();
        // $kat = Produk::select('kategori')->groupBy('kategori')->get();
        $kat = Kategori::all();
        return view('layout.kategori1', compact('kat'));
    }
}
