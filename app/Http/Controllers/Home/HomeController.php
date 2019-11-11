<?php

namespace App\Http\Controllers\Home;

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
        return view('home.sikombatan');
    }

    /**
     * Sikombatan detail page
     *
     * @return \Illuminate\Http\Response
     */
    public function sikombatanDetail($id)
    {
        //
        return view('home.sikombatan_detail');
    }

    /**
     * sikalan page
     *
     * @return \Illuminate\Http\Response
     */
    public function sikalan()
    {
        //
        return view('home.sikalan');
    }

    /**
     * sikalan detail page
     *
     * @return \Illuminate\Http\Response
     */
    public function sikalanDetail($id)
    {
        //
        return view('home.sikalan_detail');
    }

    /**
     * artikel page
     *
     * @return \Illuminate\Http\Response
     */
    public function artikel()
    {
        //
        return view('home.artikel');
    }

    /**
     * artikel detail page
     *
     * @return \Illuminate\Http\Response
     */
    public function artikelDetail($id)
    {
        //
        return view('home.artikel_detail');
    }

    /**
     * galeri page
     *
     * @return \Illuminate\Http\Response
     */
    public function galeri()
    {
        //
        return view('home.galeri');
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
        return view('home.profil');
    }

}
