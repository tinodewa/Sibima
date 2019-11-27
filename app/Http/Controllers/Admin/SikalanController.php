<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Storage;
use App\Kota;
use App\Sikalan;
use App\Provinsi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SikalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isAdmin2()) {
            $sikalans = Sikalan::with(['provinsi', 'kota', 'images'])
                            ->where('user_id', Auth::user()->id)
                            ->get();
        } else {
            $sikalans = Sikalan::with(['provinsi', 'kota', 'images'])->get();
        }
        return view('dashboard/sikalan/index', compact('sikalans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = Provinsi::get();
        $kota = Kota::get();
        return view('dashboard/sikalan/create', compact('provinsi', 'kota'));
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
            'data_dasar' => 'required',
            'nama_ruas' => 'required',
            'tahun_data' => 'required',
            'status' => 'required',
            'fungsi' => 'required',
            'mendukung' => 'nullable',
            'uraian_dukungan' => 'nullable',
            'kode_bidang_pekerjaan_umum' => 'required',
            'kode_data_dasar_jenis_infrastruktur' => 'required',
            'kode_infrastruktur' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan_desa' => 'required',
            'titik_pengenal_ruas_awal' => 'required',
            'titik_pengenal_ruas_akhir' => 'required',
            'kode_patok' => 'integer|nullable',
            'km_ruas_awal' => 'nullable',
            'km_ruas_akhir' => 'required',
            'nama_lintas' => 'nullable',
            'gambar_peta' => 'required',
            'foto_jalan' => 'required',
            'kondisi_baik' => 'nullable',
            'kondisi_sedang' => 'nullable',
            'kondisi_rusak_ringan' => 'nullable',
            'kondisi_rusak_berat' => 'nullable',
            'kondisi_mantap' => 'nullable',
            'kondisi_tidak_mantap' => 'nullable',
            'panjang_jalan' => 'required',
            'lebar_perkerasan_jalan' => 'required',
            'lalulintas_harian_jalan' => 'nullable',
            'volume_capacity_jalan' => 'nullable',
            'tipe_jalan' => 'required',
            'kapasitas_mst_jalan' => 'nullable',
            'tanah_kerikil' => 'nullable',
            'telford' => 'nullable',
            'ashpalt' => 'nullable',
            'rigid_beton' => 'nullable',
            'tahun_penanganan_terakhir' => 'nullable',
            'jenis_penanganan' => 'nullable',
            'koordinat_x_titik_awal_ruas' => 'required',
            'koordinat_y_titik_awal_ruas' => 'required',
            'koordinat_x_titik_akhir_ruas' => 'required',
            'koordinat_y_titik_akhir_ruas' => 'required',
            'diterima' => 'nullable',
            'informasi' => 'nullable'
        ]);

        // upload peta
        $peta = time().'_'.$request->gambar_peta->getClientOriginalName();
        $request->gambar_peta->storeAs('peta', $peta);

        $status = null;
        if(Auth::user()->isAdmin2()){
            $status = false;
        }
        else {
            $status = isset($request->diterima) ? true : false;
        }

        $sikalan = Sikalan::create([
            'user_id' => Auth::user()->id,
            'no_ruas' => $request->nomor_ruas,
            'kelompok_data_dasar' => $request->data_dasar,
            'nama_ruas_jalan' => $request->nama_ruas,
            'tahun_data' => $request->tahun_data,
            'status' => $request->status,
            'fungsi' => $request->fungsi,
            'mendukung' => $request->mendukung,
            'uraian_dukungan' => $request->uraian_dukungan,
            'kode_bidang_pekerjaan_umum' => $request->kode_bidang_pekerjaan_umum,
            'kode_data_dasar_jenis_infrastruktur' => $request->kode_data_dasar_jenis_infrastruktur,
            'kode_infrastruktur' => $request->kode_infrastruktur,
            'provinsi_id' => $request->provinsi,
            'kota_id' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan_desa,
            'titik_pengenal_ruas_awal' => $request->titik_pengenal_ruas_awal,
            'titik_pengenal_ruas_akhir' => $request->titik_pengenal_ruas_akhir,
            'kode_patok' => $request->kode_patok,
            'km_ruas_awal' => $request->km_ruas_awal,
            'km_ruas_akhir' => $request->km_ruas_akhir,
            'nama_lintas' => $request->nama_lintas,
            'gambar_peta' => $peta,
            'baik' => $request->kondisi_baik,
            'sedang' => $request->kondisi_sedang,
            'rusak_ringan' => $request->kondisi_rusak_ringan,
            'rusak_berat' => $request->kondisi_rusak_berat,
            'mantap' => $request->kondisi_mantap,
            'tidak_mantap' => $request->kondisi_tidak_mantap,
            'panjang' => $request->panjang_jalan,
            'lebar' => $request->lebar_perkerasan_jalan,
            'lalulintas_harian' => $request->lalulintas_harian_jalan,
            'volume_capacity' => $request->volume_capacity_jalan,
            'tipe_jalan' => $request->tipe_jalan,
            'kapasitas_mst' => $request->kapasitas_mst_jalan,
            'tanah' => $request->tanah_kerikil,
            'telford' => $request->telford,
            'ashpalt' => $request->ashpalt,
            'rigid' => $request->rigid_beton,
            'tahun_penanganan_terakhir' => $request->tahun_penanganan_terakhir,
            'jenis_penanganan' => $request->jenis_penanganan,
            'koordinat_x_awal_ruas' => $request->koordinat_x_titik_awal_ruas,
            'koordinat_y_awal_ruas' => $request->koordinat_y_titik_awal_ruas,
            'koordinat_x_akhir_ruas' => $request->koordinat_x_titik_akhir_ruas,
            'koordinat_y_akhir_ruas' => $request->koordinat_y_titik_akhir_ruas,
            'informasi' => $request->informasi,
            'status_approve' => $status
        ]);

        foreach ($request->foto_jalan as $item) {
            $filename = time().'_'.$item->getClientOriginalName();
            $item->storeAs('jalan', $filename);
            $sikalan->images()->create(['filename' => $filename]);
        }

        return redirect()->route('admin.sikalan')
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
        $sikalan = Sikalan::with(['provinsi', 'kota', 'images'])->find($id);
        return view('dashboard/sikalan/show', compact('sikalan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinsi = Provinsi::get();
        $kota = Kota::get();
        $sikalan = Sikalan::with(['provinsi', 'kota', 'images'])->find($id);
        return view('dashboard/sikalan/edit', compact('provinsi', 'kota', 'sikalan'));
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
            'data_dasar' => 'required',
            'nama_ruas' => 'required',
            'tahun_data' => 'required',
            'status' => 'required',
            'fungsi' => 'required',
            'mendukung' => 'nullable',
            'uraian_dukungan' => 'nullable',
            'kode_bidang_pekerjaan_umum' => 'required',
            'kode_data_dasar_jenis_infrastruktur' => 'required',
            'kode_infrastruktur' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan_desa' => 'required',
            'titik_pengenal_ruas_awal' => 'required',
            'titik_pengenal_ruas_akhir' => 'required',
            'kode_patok' => 'nullable',
            'km_ruas_awal' => 'nullable',
            'km_ruas_akhir' => 'required',
            'nama_lintas' => 'nullable',
            'gambar_peta' => 'nullable',
            'foto_jalan' => 'nullable',
            'kondisi_baik' => 'nullable',
            'kondisi_sedang' => 'nullable',
            'kondisi_rusak_ringan' => 'nullable',
            'kondisi_rusak_berat' => 'nullable',
            'kondisi_mantap' => 'nullable',
            'kondisi_tidak_mantap' => 'nullable',
            'panjang_jalan' => 'required',
            'lebar_perkerasan_jalan' => 'required',
            'lalulintas_harian_jalan' => 'nullable',
            'volume_capacity_jalan' => 'nullable',
            'tipe_jalan' => 'required',
            'kapasitas_mst_jalan' => 'nullable',
            'tanah_kerikil' => 'nullable',
            'telford' => 'nullable',
            'ashpalt' => 'nullable',
            'rigid_beton' => 'nullable',
            'tahun_penanganan_terakhir' => 'nullable',
            'jenis_penanganan' => 'nullable',
            'koordinat_x_titik_awal_ruas' => 'required',
            'koordinat_y_titik_awal_ruas' => 'required',
            'koordinat_x_titik_akhir_ruas' => 'required',
            'koordinat_y_titik_akhir_ruas' => 'required',
            'diterima' => 'nullable',
            'informasi' => 'nullable'
        ]);

        $sikalan = Sikalan::find($id);
        $sikalan->update([
            'no_ruas' => $request->nomor_ruas,
            'kelompok_data_dasar' => $request->data_dasar,
            'nama_ruas_jalan' => $request->nama_ruas,
            'tahun_data' => $request->tahun_data,
            'status' => $request->status,
            'fungsi' => $request->fungsi,
            'mendukung' => $request->mendukung,
            'uraian_dukungan' => $request->uraian_dukungan,
            'kode_bidang_pekerjaan_umum' => $request->kode_bidang_pekerjaan_umum,
            'kode_data_dasar_jenis_infrastruktur' => $request->kode_data_dasar_jenis_infrastruktur,
            'kode_infrastruktur' => $request->kode_infrastruktur,
            'provinsi_id' => $request->provinsi,
            'kota_id' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan_desa,
            'titik_pengenal_ruas_awal' => $request->titik_pengenal_ruas_awal,
            'titik_pengenal_ruas_akhir' => $request->titik_pengenal_ruas_akhir,
            'kode_patok' => $request->kode_patok,
            'km_ruas_awal' => $request->km_ruas_awal,
            'km_ruas_akhir' => $request->km_ruas_akhir,
            'nama_lintas' => $request->nama_lintas,
            'baik' => $request->kondisi_baik,
            'sedang' => $request->kondisi_sedang,
            'rusak_ringan' => $request->kondisi_rusak_ringan,
            'rusak_berat' => $request->kondisi_rusak_berat,
            'mantap' => $request->kondisi_mantap,
            'tidak_mantap' => $request->kondisi_tidak_mantap,
            'panjang' => $request->panjang_jalan,
            'lebar' => $request->lebar_perkerasan_jalan,
            'lalulintas_harian' => $request->lalulintas_harian_jalan,
            'volume_capacity' => $request->volume_capacity_jalan,
            'tipe_jalan' => $request->tipe_jalan,
            'kapasitas_mst' => $request->kapasitas_mst_jalan,
            'tanah' => $request->tanah_kerikil,
            'telford' => $request->telford,
            'ashpalt' => $request->ashpalt,
            'rigid' => $request->rigid_beton,
            'tahun_penanganan_terakhir' => $request->tahun_penanganan_terakhir,
            'jenis_penanganan' => $request->jenis_penanganan,
            'koordinat_x_awal_ruas' => $request->koordinat_x_titik_awal_ruas,
            'koordinat_y_awal_ruas' => $request->koordinat_y_titik_awal_ruas,
            'koordinat_x_akhir_ruas' => $request->koordinat_x_titik_akhir_ruas,
            'koordinat_y_akhir_ruas' => $request->koordinat_y_titik_akhir_ruas,
            'informasi' => $request->informasi,
            'status_approve' => isset($request->diterima) ? true : false
        ]);

        if ($request->gambar_peta) {
            Storage::delete('peta/'.$sikalan->gambar_peta);

            // upload peta
            $peta = time().'_'.$request->gambar_peta->getClientOriginalName();
            $request->gambar_peta->storeAs('peta', $peta);
            $sikalan->update(['gambar_peta' => $peta]);
        }

        if ($request->foto_jalan) {
            foreach ($sikalan->images as $image) {
                Storage::delete('jalan/'.$image->filename);
                $sikalan->images()->where('filename', $image->filename)->delete();
            }
            
            foreach ($request->foto_jalan as $item) {
                $filename = time().'_'.$item->getClientOriginalName();
                $item->storeAs('jalan', $filename);
                $sikalan->images()->create(['filename' => $filename]);
            }
        }

        return redirect()->route('admin.sikalan')
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
        $sikalan = Sikalan::with('images')->find($id);
        if ($sikalan->gambar_peta) {
            Storage::delete('peta/'.$sikalan->gambar_peta);
        }

        foreach ($sikalan->images as $image) {
            Storage::delete('jalan/'.$image->filename);
        }

        $sikalan->delete();

        return redirect()->route('admin.sikalan')
                ->with(['success' => 'Data berhasil dihapus']);
    }
}
