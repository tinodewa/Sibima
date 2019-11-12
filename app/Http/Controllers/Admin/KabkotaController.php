<?php

namespace App\Http\Controllers\Admin;

use App\Kota;
use App\Provinsi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KabkotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kotas = Kota::orderBy('id', 'DESC')->get();
        return view('dashboard/kabkota/index', compact('kotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $provinsis = Provinsi::orderBy('id', 'ASC')->get();
        return view('dashboard/kabkota/create', compact('provinsis'));
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
            'provinsi_id' => 'required|integer',
            'nama' => 'required|string|min:6'
        ]);
        $post = Kota::Create([
            'provinsi_id' => $request->provinsi_id,
            'nama' => $request->nama
        ]);
        
        return redirect()->route('admin.kabkota')->with([
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
        $kota = Kota::where('id', $id)->firstOrFail();
        $provinsis = Provinsi::orderBy('id', 'ASC')->get();
        return view('dashboard/kabkota/edit', compact('kota', 'provinsis'));
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

        $kota = Kota::where('id', $id)->firstOrFail();
        $kota->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.kabkota')
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
        $kota = Kota::where('id', $id)->firstOrFail();
        $kota->delete();

        return redirect()->route('admin.kabkota')
                ->with(['success' => 'Kabupaten / Kota berhasil dihapus']);
    }
}
