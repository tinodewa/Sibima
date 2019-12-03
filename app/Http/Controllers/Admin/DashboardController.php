<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Sikalan;
use App\Sikombatan;
use App\SikalanImage;
use App\SikombatanImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        //guarded
        //$this->middleware('role:Admin 2')->only(['index']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sikalans = Sikalan::with('thumbnail')->orderBy('id', 'desc')->get();
        $sikombatans = Sikombatan::with('thumbnail')->orderBy('id', 'desc')->get();
        $sikalanImages = SikalanImage::get();
        $sikombatanImages = sikombatanImage::get();
        $sikalanCount = $sikalans->count();
        $sikombatanCount = $sikombatans->count();

        if($sikalanCount){
            $sikalanLengthCount = Sikalan::where('status_approve', 1)->sum('panjang');;
            $sikalanMantap = Sikalan::where('status_approve', 1)->sum('mantap');
            $sikalanTidakMantap = Sikalan::where('status_approve', 1)->sum('tidak_mantap');
            $sikalanBaik = Sikalan::where('status_approve', 1)->sum('baik');
            $sikalanSedang = Sikalan::where('status_approve', 1)->sum('sedang');
            $sikalanRusakRingan = Sikalan::where('status_approve', 1)->sum('rusak_ringan');

            $totalMantapTidakMantap = $sikalanMantap + $sikalanTidakMantap;
            $totalMantap = ($sikalanMantap / $totalMantapTidakMantap) * 100;
            $totalTidakMantap = ($sikalanTidakMantap / $totalMantapTidakMantap) * 100;

            $totalKondisi = $sikalanBaik + $sikalanSedang + $sikalanRusakRingan;
            $totalBaik = ($sikalanBaik / $totalKondisi) * 100; 
            $totalSedang = ($sikalanSedang / $totalKondisi) * 100; 
            $totalRusakRingan = ($sikalanRusakRingan / $totalKondisi) * 100; 
            $sikalanStatistik = json_decode(json_encode(array(
                'sikalan_count' => $sikalanCount,
                'sikalan_length_count' => $sikalanLengthCount,
                'sikombatan_count' => $sikombatanCount,
                'sikalan_mantap' => $sikalanMantap,
                'sikalan_tidak_mantap' => $sikalanTidakMantap,
                'sikalan_baik' => $sikalanBaik,
                'sikalan_sedang' => $sikalanSedang,
                'sikalan_rusak_ringan' => $sikalanRusakRingan,
                'total_mantap' => $totalMantap,
                'total_tidak_mantap' => $totalTidakMantap,
                'total_baik' => $totalBaik,
                'total_sedang' => $totalSedang,
                'total_rusak_ringan' => $totalRusakRingan
            )));
        }
        else {
            $sikalanStatistik = json_decode(json_encode(array(
                'sikalan_count' => 0,
                'sikalan_length_count' => 0,
                'sikombatan_count' => 0,
                'sikalan_mantap' => 0,
                'sikalan_tidak_mantap' => 0,
                'sikalan_baik' => 0,
                'sikalan_sedang' => 0,
                'sikalan_rusak_ringan' => 0,
                'total_mantap' => 0,
                'total_tidak_mantap' => 0,
                'total_baik' => 0,
                'total_sedang' => 0,
                'total_rusak_ringan' => 0
            )));
        }

        
        
        return view('dashboard/index', compact('sikalans', 'sikombatans', 'sikalanImages', 'sikombatanImages', 'sikalanStatistik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
