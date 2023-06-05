<?php

namespace App\Http\Controllers;

use App\Models\tb_makananresto;
use App\Models\tb_restoran;
use Illuminate\Http\Request;
use PDF;

class tb_makananrestoController extends Controller
{
    public function index()
    {
        $makananresto = tb_makananresto::all();
        return view('restoran.makananresto', compact('makananresto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restoran = tb_restoran::all();
        return view('restoran.tambah_makananresto', compact('restoran'));
    }

    public function insert(Request $request)
    {
        tb_makananresto::create($request->all());
        return redirect()->route('makananrestoIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Makanan)
    {
        $makananresto = tb_makananresto::find($ID_Makanan);
        $restoran = tb_restoran::all();
        return view('restoran.tambah_makananresto-edit', compact('makananresto', 'restoran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Makanan)
    {
        $makananresto = tb_makananresto::find($ID_Makanan);
        $makananresto->update($request->all());
        return redirect()->route('makananrestoIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Makanan)
    {
        $makananresto = tb_makananresto::find($ID_Makanan);
        $makananresto->delete();
        return redirect()->route('makananrestoIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $makananresto = tb_makananresto::all();
        view()->share('makananrestoIndex', $makananresto);
        $pdf = PDF::loadview('restoran.makananrestopdf', compact('makananresto'));
        return $pdf->stream('MakananRestoran.pdf');
    }
}
