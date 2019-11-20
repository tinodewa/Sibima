<?php

namespace App\Http\Controllers\Admin;

use Auth;
Use App\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galeris = null;
        if(Auth::user()->role_id == 1){
            $galeris = Galeri::orderBy('id', 'DESC')->get();
        }
        else {
            $galeris = Galeri::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        }
        return view('dashboard/galeri/index', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard/galeri/create');
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
            'caption' => 'required|string|min:10',
        ]);
        
        $filename = time().'.'.$request->image_file->getClientOriginalName();
        $request->image_file->storeAs('galeri', $filename);
        
        $galeri = Galeri::Create([
            'user_id' => Auth::user()->id,
            'caption' => $request->caption,
            'image_url' => $filename
        ]);
        
        return redirect()->route('admin.galeri')->with([
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
        $galeri = Galeri::where('id', $id)->firstOrFail();
        return view('dashboard/galeri/edit', compact('galeri'));
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
            'caption' => 'required|string|min:6'
        ]);

        $galeri = Galeri::where('id', $id)->firstOrFail();
        if($request->image_file){
            unlink(storage_path('app\public\galeri\\'.$galeri->image_url));
            $filename = time().'.'.$request->image_file->getClientOriginalName();
            $request->image_file->storeAs('galeri', $filename);
            $galeri->update([
                'caption' => $request->caption,
                'image_url' => $filename
            ]);
        }
        else {
            $galeri->update([
                'caption' => $request->caption
            ]);
        }

        return redirect()->route('admin.galeri')
                ->with(['success' => 'Galeri berhasil diperbarui']);
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
        $galeri = Galeri::where('id', $id)->firstOrFail();
        
        //Storage::delete('app\public\galeri', $galeri->image_url);
        unlink(storage_path('app\public\galeri\\'.$galeri->image_url));
        
        $galeri->delete();
        return redirect()->route('admin.galeri')
                ->with(['success' => 'Galeri berhasil dihapus']);
    }
}
