<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_penilaian_restoran;
use App\Models\tb_pembeli;
use App\Models\tb_restoran;
use App\Models\tb_kriteria_restoran;
use PDF;

class tb_penilaian_restoranController extends Controller
{
    public function index()
    {
        $penilaianresto = tb_penilaian_restoran::all();
        return view('penilaian.penilaianresto', compact('penilaianresto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restoran = tb_restoran::all();
        $kriteriaresto = tb_kriteria_restoran::all();
        $pembeli = tb_pembeli::all();
        return view('penilaian.tambah_penilaianresto', compact('restoran', 'kriteriaresto', 'pembeli'));
    }

    public function insert(Request $request)
    {
        tb_penilaian_restoran::create($request->all());
        return redirect()->route('penilaianresto');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Penilaian_Restoran)
    {
        $penilaianresto = tb_penilaian_restoran::find($ID_Penilaian_Restoran);
        $restoran = tb_restoran::all();
        $kriteriaresto = tb_kriteria_restoran::all();
        $pembeli = tb_pembeli::all();
        return view('penilaian.tambah_penilaianresto-edit', compact('penilaianresto', 'restoran', 'kriteriaresto', 'pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Penilaian_Restoran)
    {
        $penilaianresto = tb_penilaian_restoran::find($ID_Penilaian_Restoran);
        $penilaianresto->update($request->all());
        return redirect()->route('penilaianresto')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Penilaian_Restoran)
    {
        $penilaianresto = tb_penilaian_restoran::find($ID_Penilaian_Restoran);
        $penilaianresto->delete();
        return redirect()->route('penilaianresto')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $penilaianresto = tb_penilaian_restoran::all();
        view()->share('penilaianresto', $penilaianresto);
        $pdf = PDF::loadview('penilaian.penilaianrestopdf', compact('penilaianresto'));
        return $pdf->stream('PenilaianRestoran.pdf');
    }
}
