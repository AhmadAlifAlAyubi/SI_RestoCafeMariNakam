<?php

namespace App\Http\Controllers;

use App\Models\tb_minumancafe;
use App\Models\tb_cafe;
use Illuminate\Http\Request;
use PDF;

class tb_minumancafeController extends Controller
{
    public function index()
    {
        $minumancafe = tb_minumancafe::all();
        return view('cafe.minumancafe', compact('minumancafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cafe = tb_cafe::all();
        return view('cafe.tambah_minumancafe', compact('cafe'));
    }

    public function insert(Request $request)
    {
        tb_minumancafe::create($request->all());
        return redirect()->route('minumancafeIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Minuman)
    {
        $minumancafe = tb_minumancafe::find($ID_Minuman);
        $cafe = tb_cafe::all();
        return view('cafe.tambah_minumancafe-edit', compact('minumancafe','cafe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Minuman)
    {
        $minumancafe = tb_minumancafe::find($ID_Minuman);
        $minumancafe->update($request->all());
        return redirect()->route('minumancafeIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Minuman)
    {
        $minumancafe = tb_minumancafe::find($ID_Minuman);
        $minumancafe->delete();
        return redirect()->route('minumancafeIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $minumancafe = tb_minumancafe::all();
        view()->share('minumancafeIndex', $minumancafe);
        $pdf = PDF::loadview('cafe.minumancafepdf', compact('minumancafe'));
        return $pdf->stream('MinumanCafe.pdf');
    }
}
