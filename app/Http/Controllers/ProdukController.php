<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kelurahan;
use App\Models\Produk;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = DB::table('users')
        ->join('umkm', 'users.id', '=', 'umkm.user_id')
        ->where('user_id','=', Auth::user()->id)
        ->get();

        $user1 = DB::table('users')
        ->join('produk', 'users.id', '=', 'produk.user_id')
        ->where('user_id','=', Auth::user()->id)
        ->get();

        $kategori = Kategori::all();
        $kelurahan = Kelurahan::all();
        $umkm = Umkm::all();
        $produk = Produk::all();
        return view('layout.profilanggota', compact( 'user1','user', 'kategori', 'umkm', 'kelurahan', 'produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $umkm = Umkm::all();
        $kategori = Kategori::all();
        return view('layout.createProduk', compact( 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' =>'required',
            'kategori_id' =>'required',
            'user_id' =>'required',
            'umkm_id' =>'required',
            'harga_produk' =>'required',
            'deskripsi_produk' =>'required',
            'gambar_produk' => 'image|file|max:2048',
        ]);

        if ($request->file('gambar_produk')) {
            $validated['gambar_produk'] = $request->file('gambar_produk')->store('post-images');
        }

        Produk::create($validated);

        return to_route('produk.index')->with('success', 'Data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        return view('layout.showProduk', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('layout.editProduk')->with([
            'produk' => Produk::find($id),
            $kategori = Kategori::all(),
            'kategori' => $kategori,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' =>'required',
            'kategori_id' =>'required',
            'harga_produk' =>'required',
            'deskripsi_produk' =>'required',
            'gambar_produk' => 'image|file|max:2048',
        ]);

        $input = $request->all();

        if ($request->file('gambar_produk')) {
            $input['gambar_produk'] = $request->file('gambar_produk')->store('post-images');
        }

        if ($request->gambar_produk) {
            Storage::delete($produk->gambar_produk);
        }

        $produk->update($input);

        return to_route('produk.index')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        if ($produk->gambar_produk) {
            Storage::delete($produk->gambar_produk);
        }
        Produk::destroy($produk->id);
        return to_route('produk.index')->with('success', 'Data berhasil di hapus');
    }
}
