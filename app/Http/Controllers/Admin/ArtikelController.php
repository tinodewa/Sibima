<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('dashboard/artikel/index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard/artikel/create');
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
            'category' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
            'reporter' => 'required|string',
            'editor' => 'required|string'
        ]);

        $filename = time().'.'.$request->image_thumbnail->getClientOriginalName();
        $request->image_thumbnail->storeAs('artikel', $filename);
        $article = Article::Create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
            'reporter' => $request->reporter,
            'editor' => $request->editor,
            'thumbnail' => $filename
        ]);

        return redirect()->route('admin.artikel')
                ->with(['success' => 'Artikel berhasil diperbarui']);
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
        $article = Article::where('id', $id)->first();
        return view('dashboard/artikel/show', compact('article'));
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
        $article = Article::where('id', $id)->first();
        return view('dashboard/artikel/edit', compact('article'));
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
            'category' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
            'reporter' => 'required|string',
            'editor' => 'required|string'
        ]);

        $article = Article::where('id', $id)->firstOrFail();
        if($request->image_thumbnail){
            unlink(storage_path('app\public\artikel\\'.$article->thumbnail));
            $filename = time().'.'.$request->image_thumbnail->getClientOriginalName();
            $request->image_thumbnail->storeAs('artikel', $filename);
            $article->update([
                'title' => $request->title,
                'category' => $request->category,
                'content' => $request->content,
                'reporter' => $request->reporter,
                'editor' => $request->editor,
                'thumbnail' => $filename
            ]);
        }
        else {
            $article->update([
                'title' => $request->title,
                'category' => $request->category,
                'content' => $request->content,
                'reporter' => $request->reporter,
                'editor' => $request->editor
            ]);
        }

        return redirect()->route('admin.artikel')
                ->with(['success' => 'Artikel berhasil diperbarui']);
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
        $artikel = Article::where('id', $id)->firstOrFail();
        
        //Storage::delete('app\public\galeri', $artikel->image_url);
        unlink(storage_path('app\public\artikel\\'.$artikel->thumbnail));
        
        $artikel->delete();
        return redirect()->route('admin.artikel')
                ->with(['success' => 'Artikel berhasil dihapus']);
    }
}
