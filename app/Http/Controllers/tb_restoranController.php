<?php

namespace App\Http\Controllers;

use App\Models\tb_restoran;
use App\Models\tb_pegawai;
use Illuminate\Http\Request;
use PDF;

class tb_RestoranController extends Controller
{
    public function index()
    {
        $restoran = tb_restoran::all();
        return view('restoran.restoran', compact('restoran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pegawai = tb_pegawai::all();
        return view('restoran.tambah_resto', compact('pegawai'));
    }

    public function insert(Request $request)
    {
        tb_restoran::create($request->all());
        return redirect()->route('restoranIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Restoran)
    {
        $restoran = tb_restoran::find($ID_Restoran);
        $pegawai = tb_pegawai::all();
        return view('restoran.tambah_resto-edit', compact('restoran', 'pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Restoran)
    {
        $restoran = tb_restoran::find($ID_Restoran);
        $restoran->update($request->all());
        return redirect()->route('restoranIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Restoran)
    {
        $restoran = tb_restoran::find($ID_Restoran);
        $restoran->delete();
        return redirect()->route('restoranIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $restoran = tb_restoran::all();
        view()->share('restoranIndex', $restoran);
        $pdf = PDF::loadview('Restoran.restoranpdf', compact('restoran'));
        return $pdf->stream('Restoran.pdf');
    }
}
