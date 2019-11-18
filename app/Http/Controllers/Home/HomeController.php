<?php

namespace App\Http\Controllers\Home;

use App\Galeri;
use App\User;
use App\Article;
use App\Profil;
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
        $sikombatans = Sikombatan::with('sikalan')->get();
        $sikombatans = $sikombatans->groupBy('sikalan.kecamatan');
        $sikombatanImages = SikombatanImage::get();
        return view('home.sikombatan', compact('sikombatans', 'sikombatanImages'));
    }

    /**
     * Sikombatan detail page
     *
     * @return \Illuminate\Http\Response
     */
    public function sikombatanDetail($id)
    {
        //
        $sikombatan = Sikombatan::with('sikalan')->where('id', $id)->first();
        $sikombatanImages = SikombatanImage::where('sikombatan_id', $id)->get();
        return view('home.sikombatan_detail', compact('sikombatan', 'sikombatanImages'));
    }

    /**
     * sikalan page
     *
     * @return \Illuminate\Http\Response
     */
    public function sikalan()
    {
        $sikalans = Sikalan::get();
        $sikalans = $sikalans->groupBy('kecamatan');
        $sikalanImages = SikalanImage::get();
        return view('home.sikalan', compact('sikalans', 'sikalanImages'));
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

}
