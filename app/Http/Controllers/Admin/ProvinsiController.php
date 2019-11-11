<?php

namespace App\Http\Controllers\Admin;

use App\Provinsi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $provinsis = Provinsi::all();
        return view('dashboard/provinsi/index', compact('provinsis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard/provinsi/create');
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
        $post = Provinsi::Create([
            'nama' => $request->nama
        ]);
        
        return redirect()->route('admin.provinsi')->with([
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
        $provinsi = Provinsi::where('id', $id)->firstOrFail();
        return view('dashboard/provinsi/edit', compact('provinsi'));
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

        $provinsi = Provinsi::where('id', $id)->firstOrFail();
        $provinsi->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.provinsi')
                ->with(['success' => 'Provinsi berhasil diperbarui']);
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
        $provinsi = Provinsi::where('id', $id)->firstOrFail();
        $provinsi->delete();

        return redirect()->route('admin.provinsi')
                ->with(['success' => 'Provinsi berhasil dihapus']);
    }
}
