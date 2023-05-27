<?php

namespace App\Http\Controllers;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kecamatan = Kecamatan::all();
        return view('previlege.kecamatan')->with('kecamatan', $kecamatan);
        
        // // dd($kecamatan);
        // return view('layout.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('previlege.createKecamatan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {       
        //data tertangkap
        // return $request;         
        
        //$validatedData['user_id'] = auth()->user()->id;

        Kecamatan::create([
            'nama_kecamatan' => request('nama_kecamatan')
        ]);

        return to_route('kecamatan.index')->with('success', 'Data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kecamatan $kecamatan)
    {        
        return view('previlege.editKecamatan',[
            'kecamatan'=> $kecamatan,
            $kecamatan = Kecamatan::all()
        ]);

        // dd('test');

        // $kecamatan = Kecamatan::get();
        // return view('previlege.editKecamatan', ['kecamatan' => $kecamatan]);
        
        // return view('previlege.editKecamatan')->with([
        //     'kecamatan' => Kecamatan::find($id),
        // ]);

        // Kecamatan $kecamatan
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kecamatan $kecamatan)
    {
        $request->validate([
            'nama_kecamatan' => 'required'
        ]);

        // $kecamatan = new Kecamatan::find($id);
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;

        $kecamatan->save();

        return to_route('kecamatan.index')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kecamatan $kecamatan)
    {
        // $kecamatan = Kecamatan::find($kecamatan);
        $kecamatan->delete();
        return to_route('kecamatan.index')->with('success', 'Data berhasil di hapus');
    }
}
