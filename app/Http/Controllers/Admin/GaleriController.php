<?php

namespace App\Http\Controllers\Admin;

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
        $galeris = Galeri::orderBy('id', 'DESC')->get();
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
        return view('dashboard/galeri/edit');
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
        $galeri = Galeri::where('id', $id)->firstOrFail();
        $galeri->delete();

        return redirect()->route('admin.galeri')
                ->with(['success' => 'Galeri berhasil dihapus']);
    }
}
