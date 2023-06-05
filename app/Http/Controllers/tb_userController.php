<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_user;
use PDF;

class tb_userController extends Controller
{
    public function index()
    {
        $user = tb_user::all();
        return view('tb_user.user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tb_user.tambah_user');
    }

    public function insert(Request $request)
    {
        tb_user::create($request->all());
        return redirect()->route('userIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_User)
    {
        $user = tb_user::find($ID_User);
        //dd($data_gudang_rokok);
        return view('tb_user.tambah_user-edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_User)
    {
        $user = tb_user::find($ID_User);
        $user->update($request->all());
        return redirect()->route('userIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_User)
    {
        $user = tb_user::find($ID_User);
        $user->delete();
        return redirect()->route('userIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $user = tb_user::all();
        view()->share('userIndex', $user);
        $pdf = PDF::loadview('tb_user.userpdf', compact('user'));
        return $pdf->stream('User.pdf');
    }
}
