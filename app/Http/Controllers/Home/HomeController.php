<?php

namespace App\Http\Controllers\Home;

use App\Galeri;
use App\User;
use App\Article;
use App\Profil;
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
