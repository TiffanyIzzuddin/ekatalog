<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
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
        $pro = Produk::inRandomOrder()->take(5)->get();
        return view('layout.dashboard', compact('pro', 'prod'));
    }


    //kategori dibawah ini diganti dengan indexKategori diatas
    public function kategori(){
        // menampilkan seluruh kategori
        // $kat = DB::table('kategori')->get();
        // $kat = Produk::select('kategori')->groupBy('kategori')->get();
        $pro = Produk::all();
        $kat = Kategori::all();
        return view('layout.kategori1', compact('kat', 'pro'));
    }

    public function kategori2(Kategori $id)
    {
        $kat = Kategori::find($id);
        $pro = Produk::all();
        // $pro = DB::table('kategori')
        // ->join('produk', 'kategori.id', '=', 'produk.kategori_id')
        // ->where('kategori_id','=', $id)
        // ->get();

        return view('layout.kategori', compact('kat', 'pro'));
    }
}
