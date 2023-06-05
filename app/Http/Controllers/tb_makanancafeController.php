<?php

namespace App\Http\Controllers;

use App\Models\tb_makanancafe;
use App\Models\tb_cafe;

use Illuminate\Http\Request;
use PDF;

class tb_makanancafeController extends Controller
{
    public function index()
    {
        $makanancafe = tb_makanancafe::all();
        return view('cafe.makanancafe', compact('makanancafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cafe = tb_cafe::all();
        return view('cafe.tambah_makanancafe', compact('cafe'));
    }

    public function insert(Request $request)
    {
        tb_makanancafe::create($request->all());
        return redirect()->route('makanancafeIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Makanan)
    {
        $makanancafe = tb_makanancafe::find($ID_Makanan);
        $cafe = tb_cafe::all();
        return view('cafe.tambah_makanancafe-edit', compact('makanancafe','cafe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Makanan)
    {
        $makanancafe = tb_makanancafe::find($ID_Makanan);
        $makanancafe->update($request->all());
        return redirect()->route('makanancafeIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Makanan)
    {
        $makanancafe = tb_makanancafe::find($ID_Makanan);
        $makanancafe->delete();
        return redirect()->route('makanancafeIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $makanancafe = tb_makanancafe::all();
        view()->share('makanancafeIndex', $makanancafe);
        $pdf = PDF::loadview('cafe.makanancafepdf', compact('makanancafe'));
        return $pdf->stream('MakananCafe.pdf');
    }
}
