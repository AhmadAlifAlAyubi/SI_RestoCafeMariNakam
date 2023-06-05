<?php

namespace App\Http\Controllers;

use App\Models\tb_pesanan_restoran;
use App\Models\tb_restoran;
use App\Models\tb_pembeli;
use App\Models\tb_makananresto;
use App\Models\tb_minumanresto;
use Illuminate\Http\Request;
use PDF;

class tb_pesanan_restoranController extends Controller
{
    public function index()
    {
        $pesananrestoran = tb_pesanan_restoran::all();
        // $data = array("pesananresto" => tb_pesanan_restoran::all());
        return view('pesanan.pesananresto', compact('pesananrestoran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restoran = tb_restoran::all();
        $makananresto = tb_makananresto::all();
        $minumanresto = tb_minumanresto::all();
        $pembeli = tb_pembeli::all();
        return view('pesanan.tambah_pesananresto', compact('restoran', 'makananresto', 'pembeli', 'minumanresto'));
    }

    public function insert(Request $request)
    {
        tb_pesanan_restoran::create($request->all());
        return redirect()->route('pesananresto');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Pesanan_Restoran)
    {
        $pesananrestoran = tb_pesanan_restoran::find($ID_Pesanan_Restoran);
        $restoran = tb_restoran::all();
        $makananresto = tb_makananresto::all();
        $minumanresto = tb_minumanresto::all();
        $pembeli = tb_pembeli::all();

        return view('pesanan.tambah_pesananresto-edit', compact('pesananrestoran', 'restoran', 'makananresto', 'pembeli', 'minumanresto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Pesanan_Restoran)
    {
        $pesananrestoran = tb_pesanan_restoran::find($ID_Pesanan_Restoran);
        $pesananrestoran->update($request->all());
        return redirect()->route('pesananresto')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Pesanan_Restoran)
    {
        $pesananrestoran = tb_pesanan_restoran::find($ID_Pesanan_Restoran);
        $pesananrestoran->delete();
        return redirect()->route('pesananresto')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $pesananrestoran = tb_pesanan_restoran::all();
        view()->share('pesananresto', $pesananrestoran);
        $pdf = PDF::loadview('pesanan.pesananrestopdf', compact('pesananrestoran'));
        return $pdf->stream('PesananRestoran.pdf');
    }
}
