<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        return view('previlege.kelurahan', compact('kecamatan', 'kelurahan'));
        // return view('previlege.kelurahan')->with('kelurahan', $kelurahan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('previlege.createKelurahan', compact('kecamatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request; 
        Kelurahan::create([
            'nama_kelurahan' => request('nama_kelurahan'),
            'kecamatan_id' => request('kecamatan_id')
        ]);

        return to_route('kelurahan.index')->with('success', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Kelurahan $kelurahan
        //string $id

        // return view('previlege.editKelurahan'[
        //     'kelurahan'=> $kelurahan,
        //     $kecamatan = Kelurahan::all() ]);

        return view('previlege.editKelurahan')->with([
            'kelurahan' => Kelurahan::find($id),
            $kecamatan = Kecamatan::all(),
            'kecamatan' => $kecamatan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelurahan $kelurahan)
    {
        $request->validate([
            'nama_kelurahan' => 'required',
            'kecamatan_id'  => 'required'
        ]);

        $kelurahan->nama_kelurahan = $request->nama_kelurahan;
        $kelurahan->kecamatan_id = $request->kecamatan_id;

        $kelurahan->save();

        return to_route('kelurahan.index')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kecamatan = Kelurahan::find($id);
        $kecamatan->delete();

        return to_route('kelurahan.index')->with('success', 'Data berhasil di hapus');
    }
}
