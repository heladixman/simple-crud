<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $datas = User::simplePaginate(10);

        return view('pages.users.index',[
            "title" => "Users",
            "data" => $datas,
            "user" => $user,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataStore = $request->validate([
            "name" => "required",
            "username" => "required",
            "email" => "required",
            "password" => "required",
            "is_admin" => "required"
        ]);
        User::Create($dataStore);

        return redirect('/user')->with('success', 'Akun Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('pages.users.edit',[
            "user" => $user,
            "title" => "Users",
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $dataStore = $request->validate([
            "name" => "required",
            "username" => "required",
            "email" => "required",
            "is_admin" => "required"
        ]);

        User::where('id', $user->id)->update($dataStore);

        return redirect('/user')->with('success', 'Akun Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/user')->with('success', 'Akun Berhasil Dihapus');
    }
}
