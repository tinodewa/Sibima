<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('role_id' , '!=', 1)->get();
        return view('dashboard/users/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard/users/create');
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
            'name' => 'required|string',
            'username' => 'required|string',
            'password' => 'required|string',
            'role_id' => 'required',
            'status' => 'required'
        ]);

        $filename = time().'.'.$request->image_url->getClientOriginalName();
        $request->image_url->storeAs('user', $filename);
        $user = User::Create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
            'role_id' => $request->role_id,
            'status' => $request->status,
            'image_url' => $filename,
            'last_login' =>  null
        ]);

        return redirect()->route('admin.users')
                ->with(['success' => 'User berhasil ditambahkan']);
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
        return view('dashboard/users/show');
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
        return view('dashboard/users/edit');
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

        $user = User::where('id', $id)->firstOrFail();
            
        //Storage::delete('app\public\galeri', $user->image_url);
        //unlink(storage_path('app\public\user\\'.$user->image_url));
        
        $user->delete();
        return redirect()->route('admin.users')
                ->with(['success' => 'User berhasil dihapus']);
    }
}
