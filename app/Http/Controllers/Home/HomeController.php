<?php

namespace App\Http\Controllers\Home;

use App\Galeri;
use App\User;
use App\Article;
use App\Profil;
use App\Provinsi;
use App\Kota;
use App\Kecamatan;
use App\Sikalan;
use App\SikalanImage;
use App\Sikombatan;
use App\SikombatanImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    /**
     * Sikombatan page
     *
     * @return \Illuminate\Http\Response
     */
    public function sikombatan()
    {
        //
        $provinsis = Provinsi::get();
        $kotas = Kota::get();
        $kecamatan = Kecamatan::get();
        $sikombatans = Sikombatan::where('status_approve', true)->get();
        $jembatan = null;
        if (request()->id){
            $jembatan = Sikombatan::with(['sikalan', 'images'])->find(request()->id);
        }
        else {
            $jembatan = null;
        }
        $sikombatanImages = SikombatanImage::get();
        return view('new.sikombatan_baru', compact('sikombatans', 'kecamatan', 'sikombatanImages', 'jembatan', 'provinsis', 'kotas'));
    }

    /**
     * Sikombatan detail page
     *
     * @return \Illuminate\Http\Response
     */
    public function sikombatanDetail($id)
    {
        //
        $provinsis = Provinsi::get();
        $kotas = Kota::get();
        $sikombatans = Sikalan::where('status_approve', true)->get();
        $jembatan = null;
        if (request()->id){
            $jembatan = Sikalan::where('id', request()->id)->first();
        }
        else {
            $jembatan = null;
        }
        
        $sikalanImages = SikalanImage::get();
        return view('new.sikalan_baru', compact('sikombatans', 'sikombatanImages', 'jembatan', 'provinsis', 'kotas'));
    }

    /**
     * sikalan page
     *
     * @return \Illuminate\Http\Response
     */
    public function sikalan()
    {
        $provinsis = Provinsi::get();
        $kotas = Kota::get();
        $kecamatan = Kecamatan::get();
        $sikalans = Sikalan::where('status_approve', true)->get();
        $jalan = null;
        if (request()->id){
            $jalan = Sikalan::where('id', request()->id)->first();
            // get persentase
            $totalKondisi = $jalan->baik + $jalan->sedang + $jalan->rusak_ringan + $jalan->rusak_berat;
            $baik = $jalan->baik / $totalKondisi * 100; 
            $sedang = $jalan->sedang / $totalKondisi * 100; 
            $rusak_ringan = $jalan->rusak_ringan / $totalKondisi * 100; 
            $rusak_berat = $jalan->rusak_berat / $totalKondisi * 100; 
            $kondisi = json_decode(json_encode(array(
                'baik' => number_format($baik, 2),
                'sedang' => number_format($sedang, 2),
                'rusak_ringan' => number_format($rusak_ringan, 2),
                'rusak_berat' => number_format($rusak_berat, 2)
            )));
        }
        else {
            $jalan = null;
            $kondisi = json_decode(json_encode(array(
                'baik' => '-',
                'sedang' => '-',
                'rusak_ringan' => '-',
                'rusak_berat' => '-'
            )));
        }
        
        $sikalanImages = SikalanImage::get();
        return view('new.sikalan_baru', compact('sikalans', 'kecamatan', 'jalan', 'sikalanImages', 'provinsis', 'kotas', 'kondisi'));
    }

    /**
     * sikalan detail page
     *
     * @return \Illuminate\Http\Response
     */
    public function sikalanDetail($id)
    {
        //
        $sikalan = Sikalan::where('id', $id)->first();
        $sikalanImages = SikalanImage::where('sikalan_id', $id)->get();

        // get persentase
        $totalKondisi = $sikalan->baik + $sikalan->sedang + $sikalan->rusak_ringan + $sikalan->rusak_berat;
        $baik = $sikalan->baik / $totalKondisi * 100; 
        $sedang = $sikalan->sedang / $totalKondisi * 100; 
        $rusak_ringan = $sikalan->rusak_ringan / $totalKondisi * 100; 
        $rusak_berat = $sikalan->rusak_berat / $totalKondisi * 100; 
        $kondisi = json_decode(json_encode(array(
            'baik' => number_format($baik, 2),
            'sedang' => number_format($sedang, 2),
            'rusak_ringan' => number_format($rusak_ringan, 2),
            'rusak_berat' => number_format($rusak_berat, 2)
        )));
        return view('home.sikalan_detail', compact('sikalan', 'sikalanImages', 'kondisi'));
    }

    /**
     * artikel page
     *
     * @return \Illuminate\Http\Response
     */
    public function artikel()
    {
        //
        $articles = Article::with('user')->orderBy('id', 'DESC')->get();
        return view('home.artikel', compact('articles'));
    }

    /**
     * artikel detail page
     *
     * @return \Illuminate\Http\Response
     */
    public function artikelDetail($id)
    {
        //
        $articles = Article::orderBy('id', 'DESC')->get();
        $article = Article::with('user')->where('id', $id)->first();
        return view('home.artikel_detail', compact('article', 'articles'));
    }

    /**
     * galeri page
     *
     * @return \Illuminate\Http\Response
     */
    public function galeri()
    {
        //
        $galeris = Galeri::orderBy('id', 'DESC')->get();
        return view('home.galeri', compact('galeris'));
    }

    /**
     * bilik Laporan page
     *
     * @return \Illuminate\Http\Response
     */
    public function bilikLaporan()
    {
        //
        return view('home.bilik_laporan');
    }

    /**
     * Profil Laporan page
     *
     * @return \Illuminate\Http\Response
     */
    public function profil()
    {
        //
        $profil = Profil::first();
        return view('home.profil', compact('profil'));
    }

    public function getJalan($id){
        $jalan = Sikalan::where("kecamatan",$id)->orderBy('no_ruas', 'ASC')->get();
        return response()->json($jalan);    
    }

    public function getJembatan($id){
        $jembatan = Sikombatan::with(['sikalan', 'images'])->get();
        
        return response()->json($jembatan);    
    }

}
