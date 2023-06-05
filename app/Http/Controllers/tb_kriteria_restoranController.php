<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_kriteria_restoran;
use PDF;

class tb_kriteria_restoranController extends Controller
{
    public function index()
    {
        $kriteriaresto = tb_kriteria_restoran::all();
        return view('kriteria.kriteriaresto', compact('kriteriaresto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kriteriaresto = tb_kriteria_restoran::all();
        return view('kriteria.tambah_kriteriaresto', compact('kriteriaresto'));
    }

    public function insert(Request $request)
    {
        tb_kriteria_restoran::create($request->all());
        return redirect()->route('kriteriarestoIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Kriteria_Restoran)
    {
        $kriteriaresto = tb_kriteria_restoran::find($ID_Kriteria_Restoran);
        return view('kriteria.tambah_kriteriaresto-edit', compact('kriteriaresto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Kriteria_Restoran)
    {
        $kriteriaresto = tb_kriteria_restoran::find($ID_Kriteria_Restoran);
        $kriteriaresto->update($request->all());
        return redirect()->route('kriteriarestoIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Kriteria_Restoran)
    {
        $kriteriaresto = tb_kriteria_restoran::find($ID_Kriteria_Restoran);
        $kriteriaresto->delete();
        return redirect()->route('kriteriarestoIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $kriteriaresto = tb_kriteria_restoran::all();
        view()->share('kriteriarestoIndex', $kriteriaresto);
        $pdf = PDF::loadview('kriteria.kriteriarestopdf', compact('kriteriaresto'));
        return $pdf->stream('KriteriaRestoran.pdf');
    }
}
