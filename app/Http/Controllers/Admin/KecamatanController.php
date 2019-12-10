<?php

namespace App\Http\Controllers\Admin;

use App\Kecamatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kecamatans = Kecamatan::orderBy('id', 'DESC')->get();
        return view('dashboard/kecamatan/index', compact('kecamatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard/kecamatan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required|string|min:6'
        ]);
        $post = Kecamatan::Create([
            'nama' => $request->nama
        ]);
        
        return redirect()->route('admin.kecamatan')->with([
            'success' => 'Berhasil menambah data'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kecamatan = Kecamatan::where('id', $id)->firstOrFail();
        return view('dashboard/kecamatan/edit', compact('kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama' => 'required|string|min:6'
        ]);

        $kota = Kecamatan::where('id', $id)->firstOrFail();
        $kota->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.kecamatan')
                ->with(['success' => 'Kabupaten / Kota berhasil diperbarui']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kota = Kecamatan::where('id', $id)->firstOrFail();
        $kota->delete();

        return redirect()->route('admin.kecamatan')
                ->with(['success' => 'Kabupaten / Kota berhasil dihapus']);
    }
}
