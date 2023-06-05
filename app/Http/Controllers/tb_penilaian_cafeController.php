<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_penilaian_cafe;
use App\Models\tb_pembeli;
use App\Models\tb_cafe;
use App\Models\tb_kriteria_cafe;
use PDF;
class tb_penilaian_cafeController extends Controller
{
    public function index()
    {
        $penilaiancafe = tb_penilaian_cafe::all();
        return view('penilaian.penilaiancafe', compact('penilaiancafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cafe = tb_cafe::all();
        $kriteriacafe = tb_kriteria_cafe::all();
        $pembeli = tb_pembeli::all();
        return view('penilaian.tambah_penilaiancafe', compact('cafe', 'kriteriacafe', 'pembeli'));
    }

    public function insert(Request $request)
    {
        tb_penilaian_cafe::create($request->all());
        return redirect()->route('penilaiancafeIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Penilaian_Cafe)
    {
        $penilaiancafe = tb_penilaian_cafe::find($ID_Penilaian_Cafe);
        $cafe = tb_cafe::all();
        $kriteriacafe = tb_kriteria_cafe::all();
        $pembeli = tb_pembeli::all();
        //dd($data_gudang_rokok);
        return view('penilaian.tambah_penilaiancafe-edit', compact('penilaiancafe','cafe', 'kriteriacafe', 'pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Penilaian_Cafe)
    {
        $penilaiancafe = tb_penilaian_cafe::find($ID_Penilaian_Cafe);
        $penilaiancafe->update($request->all());
        return redirect()->route('penilaiancafeIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Penilaian_Cafe)
    {
        $penilaiancafe = tb_penilaian_cafe::find($ID_Penilaian_Cafe);
        $penilaiancafe->delete();
        return redirect()->route('penilaiancafeIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $penilaiancafe = tb_penilaian_cafe::all();
        view()->share('penilaiancafeIndex', $penilaiancafe);
        $pdf = PDF::loadview('penilaian.penilaiancafepdf', compact('penilaiancafe'));
        return $pdf->stream('PenilaianCafe.pdf');
    }
}
