<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_kriteria_cafe;
use PDF;

class tb_kriteria_cafeController extends Controller
{
    public function index()
    {
        $kriteriacafe = tb_kriteria_cafe::all();
        return view('kriteria.kriteriacafe', compact('kriteriacafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kriteriacafe = tb_kriteria_cafe::all();
        return view('kriteria.tambah_kriteriacafe', compact('kriteriacafe'));
    }

    public function insert(Request $request)
    {
        tb_kriteria_cafe::create($request->all());
        return redirect()->route('kriteriacafeIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Kriteria_Cafe)
    {
        $kriteriacafe = tb_kriteria_cafe::find($ID_Kriteria_Cafe);
        return view('kriteria.tambah_kriteriacafe-edit', compact('kriteriacafe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Kriteria_Cafe)
    {
        $kriteriacafe = tb_kriteria_cafe::find($ID_Kriteria_Cafe);
        $kriteriacafe->update($request->all());
        return redirect()->route('kriteriacafeIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Kriteria_Cafe)
    {
        $kriteriacafe = tb_kriteria_cafe::find($ID_Kriteria_Cafe);
        $kriteriacafe->delete();
        return redirect()->route('kriteriacafeIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $kriteriacafe = tb_kriteria_cafe::all();
        view()->share('kriteriacafeIndex', $kriteriacafe);
        $pdf = PDF::loadview('kriteria.kriteriacafepdf', compact('kriteriacafe'));
        return $pdf->stream('KriteriaCafe.pdf');
    }
}
