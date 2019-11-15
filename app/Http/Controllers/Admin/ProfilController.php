<?php

namespace App\Http\Controllers\Admin;

use App\Profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profil = Profil::where('id', 1)->first();
        return view('dashboard/profil/index', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard/profil/create');
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
        $profil = Profil::where('id', 1)->first();
        return view('dashboard/profil/edit', compact('profil'));
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
            'content' => 'required|string',
        ]);

        $profil = Profil::where('id', $id)->firstOrFail();
        if($request->image_thumbnail){
            unlink(storage_path('app\public\profil\\'.$profil->thumbnail));
            $filename = time().'.'.$request->image_thumbnail->getClientOriginalName();
            $request->image_thumbnail->storeAs('profil', $filename);
            $profil->update([
                'content' => $request->content,
                'thumbnail' => $filename
            ]);
        }
        else {
            $profil->update([
                'content' => $request->content
            ]);
        }

        return redirect()->route('admin.profil')
                ->with(['success' => 'Profil berhasil diperbarui']);
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
        $artikel = Profil::where('id', $id)->firstOrFail();
        
        //Storage::delete('app\public\galeri', $artikel->image_url);
        //unlink(storage_path('app\public\artikel\\'.$artikel->thumbnail));
        
        $artikel->delete();
        return redirect()->route('admin.profil')
                ->with(['success' => 'Profil berhasil dihapus']);
    }
}
