<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Produk;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UmkmController extends Controller
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

        return view('layout.profilanggota', compact('user','user1'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view('layout.createProfil', compact('kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ddd($request);
        // return $request->file('logo_umkm')->store('post-images');

        $validated = $request->validate([
            'nama_umkm' => 'required',
            'nama_pemilik' => 'required',
            'kelurahan_id' => 'required',
            'alamat_umkm' => 'required',
            'no_telp_umkm' => 'required',
            'url_instagram' => 'required',
            'keterangan_umkm' => 'required',
            'logo_umkm' => 'image|file|max:2048',
            'status_umkm' => 'required',
            'user_id' => 'required',
        ]);

        if ($request->file('logo_umkm')) {
            $validated['logo_umkm'] = $request->file('logo_umkm')->store('post-images');
        }

        Umkm::create($validated);
        return to_route('umkm.index')->with('success', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $user = DB::table('umkm')
        ->join('produk', 'umkm.id', '=', 'produk.umkm_id')
        ->where('umkm_id','=', $request)
        ->get();

        // $user = DB::table('users')
        // ->join('umkm', 'users.id', '=', 'umkm.user_id')
        // ->join('produk', 'users.id', '=', 'produk.user_id')
        // ->where('user_id','=', 'id')
        // ->get();

        return view('layout.profilanggota', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('layout.editProfil')->with([
            'umkm' => Umkm::find($id),
            $kelurahan = Kelurahan::all(),
            'kelurahan' => $kelurahan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Umkm $umkm)
    {

        $request->validate([
            'nama_umkm' => 'required',
            'nama_pemilik' => 'required',
            'kelurahan_id' => 'required',
            'alamat_umkm' => 'required',
            'no_telp_umkm' => 'required',
            'url_instagram' => 'required',
            'keterangan_umkm' => 'required',
            'logo_umkm' => 'image|file|max:2048',
            'status_umkm' => 'required',
        ]);

        $input = $request->all();
        
        if ($request->file('logo_umkm')) {
            $input['logo_umkm'] = $request->file('logo_umkm')->store('post-images');
        }

        if ($request->logo_umkm) {
            Storage::delete($umkm->logo_umkm);
        }

        $umkm->update($input);
        
        return to_route('umkm.index')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Umkm $umkm)
    {
        if ($umkm->logo_umkm) {
            Storage::delete($umkm->logo_umkm);
        }
        Umkm::destroy($umkm->id);
        return to_route('umkm.index')->with('success', 'Data berhasil di hapus');
    }
}
