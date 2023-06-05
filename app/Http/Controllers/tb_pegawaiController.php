<?php

namespace App\Http\Controllers;

use App\Models\tb_pegawai;
use App\Models\tb_user;
use Illuminate\Http\Request;
use PDF;

class tb_pegawaiController extends Controller
{
    public function index()
    {
        $pegawai = tb_pegawai::all();
        return view('pegawai.pegawai', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = tb_user::all();
        return view('pegawai.tambahpegawai', compact('user'));
    }

    public function insert(Request $request)
    {
        tb_pegawai::create($request->all());
        return redirect()->route('pegawai');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Pegawai)
    {
        $pegawai = tb_pegawai::find($ID_Pegawai);
        $user = tb_user::all();
        return view('pegawai.tambahpegawai-edit', compact('pegawai', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Pegawai)
    {
        $pegawai = tb_pegawai::find($ID_Pegawai);
        $pegawai->update($request->all());
        return redirect()->route('pegawai')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Pegawai)
    {
        $pegawai = tb_pegawai::find($ID_Pegawai);
        $pegawai->delete();
        return redirect()->route('pegawai')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $pegawai = tb_pegawai::all();
        view()->share('pegawai', $pegawai);
        $pdf = PDF::loadview('pegawai.pegawaipdf', compact('pegawai'));
        return $pdf->stream('Pegawai.pdf');
    }
}
