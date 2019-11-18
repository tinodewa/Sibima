<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Storage;
use App\Sikalan;
use App\Sikombatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SikombatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isAdmin2()) {
            $sikombatans = Sikombatan::with(['sikalan', 'images'])
                            ->where('user_id', Auth::user()->id)
                            ->get();
        } else {
            $sikombatans = Sikombatan::with(['sikalan', 'images'])->get();
        }
        return view('dashboard/sikombatan/index', compact('sikombatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sikalans = Sikalan::get();
        return view('dashboard/sikombatan/create', compact('sikalans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_ruas' => 'required',
            'nama_jembatan' => 'nullable',
            'no_jembatan' => 'required',
            'jenis_konstruksi' => 'required',
            'km_post' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'jumlah_bentang' => 'required',
            'tipe_bangunan_atas' => 'required',
            'kondisi_bangunan_atas' => 'required',
            'tipe_bangunan_bawah' => 'required',
            'kondisi_bangunan_bawah' => 'required',
            'tipe_fondasi' => 'nullable',
            'kondisi_fondasi' => 'nullable',
            'tipe_lantai' => 'required',
            'kondisi_lantai' => 'required',
            'koordinat_x' => 'required',
            'koordinat_y' => 'required',
            'informasi' => 'nullable',
            'gambar_peta' => 'required',
            'foto_jembatan' => 'required'
        ]);

        // upload peta
        $peta = time().'_'.$request->gambar_peta->getClientOriginalName();
        $request->gambar_peta->storeAs('peta_jembatan', $peta);

        $sikombatan = Sikombatan::create([
            'user_id' => Auth::user()->id,
            'sikalan_id' => $request->nomor_ruas,
            'nama_jembatan' => $request->nama_jembatan,
            'no_jembatan' => $request->no_jembatan,
            'jenis_konstruksi' => $request->jenis_konstruksi,
            'km_post' => $request->km_post,
            'panjang' => $request->panjang,
            'lebar' => $request->lebar,
            'jumlah_bentang' => $request->jumlah_bentang,
            'tipe_bangunan_atas' => $request->tipe_bangunan_atas,
            'kondisi_bangunan_atas' => $request->kondisi_bangunan_atas,
            'tipe_bangunan_bawah' => $request->tipe_bangunan_bawah,
            'kondisi_bangunan_bawah' => $request->kondisi_bangunan_bawah,
            'tipe_fondasi' => $request->tipe_fondasi,
            'kondisi_fondasi' => $request->kondisi_fondasi,
            'tipe_lantai' => $request->tipe_lantai,
            'kondisi_lantai' => $request->kondisi_lantai,
            'koordinat_x' => $request->koordinat_x,
            'koordinat_y' => $request->koordinat_y,
            'informasi' => $request->informasi,
            'gambar_peta' => $peta,
            'status_approve' => isset($request->status_approve) ? true : false
        ]);

        foreach ($request->foto_jembatan as $item) {
            $filename = time().'_'.$item->getClientOriginalName();
            $item->storeAs('jembatan', $filename);
            $sikombatan->images()->create(['filename' => $filename]);
        }

        return redirect()->route('admin.sikombatan')
                ->with(['success' => 'Data berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sikombatan = Sikombatan::with(['sikalan', 'images'])->find($id);
        return view('dashboard/sikombatan/show', compact('sikombatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sikalans = Sikalan::get();
        $sikombatan = Sikombatan::with(['sikalan', 'images'])->find($id);
        return view('dashboard/sikombatan/edit', compact('sikalans', 'sikombatan'));
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
        $request->validate([
            'nomor_ruas' => 'required',
            'nama_jembatan' => 'nullable',
            'no_jembatan' => 'required',
            'jenis_konstruksi' => 'required',
            'km_post' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'jumlah_bentang' => 'required',
            'tipe_bangunan_atas' => 'required',
            'kondisi_bangunan_atas' => 'required',
            'tipe_bangunan_bawah' => 'required',
            'kondisi_bangunan_bawah' => 'required',
            'tipe_fondasi' => 'nullable',
            'kondisi_fondasi' => 'nullable',
            'tipe_lantai' => 'required',
            'kondisi_lantai' => 'required',
            'koordinat_x' => 'required',
            'koordinat_y' => 'required',
            'informasi' => 'nullable',
            'gambar_peta' => 'nullable',
            'foto_jembatan' => 'nullable'
        ]);

        $sikombatan = Sikombatan::find($id);
        $sikombatan->update([
            'sikalan_id' => $request->nomor_ruas,
            'nama_jembatan' => $request->nama_jembatan,
            'no_jembatan' => $request->no_jembatan,
            'jenis_konstruksi' => $request->jenis_konstruksi,
            'km_post' => $request->km_post,
            'panjang' => $request->panjang,
            'lebar' => $request->lebar,
            'jumlah_bentang' => $request->jumlah_bentang,
            'tipe_bangunan_atas' => $request->tipe_bangunan_atas,
            'kondisi_bangunan_atas' => $request->kondisi_bangunan_atas,
            'tipe_bangunan_bawah' => $request->tipe_bangunan_bawah,
            'kondisi_bangunan_bawah' => $request->kondisi_bangunan_bawah,
            'tipe_fondasi' => $request->tipe_fondasi,
            'kondisi_fondasi' => $request->kondisi_fondasi,
            'tipe_lantai' => $request->tipe_lantai,
            'kondisi_lantai' => $request->kondisi_lantai,
            'koordinat_x' => $request->koordinat_x,
            'koordinat_y' => $request->koordinat_y,
            'informasi' => $request->informasi,
            'status_approve' => isset($request->status_approve) ? true : false
        ]);

        if ($request->gambar_peta) {
            Storage::delete('peta_jembatan/'.$sikombatan->gambar_peta);

            // upload peta
            $peta = time().'_'.$request->gambar_peta->getClientOriginalName();
            $request->gambar_peta->storeAs('peta_jembatan', $peta);
            $sikombatan->update(['gambar_peta' => $peta]);
        }

        if ($request->foto_jembatan) {
            foreach ($sikombatan->images as $image) {
                Storage::delete('jembatan/'.$image->filename);
                $sikombatan->images()->where('filename', $image->filename)->delete();
            }
            
            foreach ($request->foto_jembatan as $item) {
                $filename = time().'_'.$item->getClientOriginalName();
                $item->storeAs('jembatan', $filename);
                $sikombatan->images()->create(['filename' => $filename]);
            }
        }

        return redirect()->route('admin.sikombatan')
                ->with(['success' => 'Data berhasil disimpan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sikombatan = Sikombatan::with('images')->find($id);
        if ($sikombatan->gambar_peta) {
            Storage::delete('peta_jembatan/'.$sikombatan->gambar_peta);
        }

        foreach ($sikombatan->images as $image) {
            Storage::delete('jembatan/'.$image->filename);
        }

        $sikombatan->delete();

        return redirect()->route('admin.sikombatan')
                ->with(['success' => 'Data berhasil dihapus']);
    }
}
