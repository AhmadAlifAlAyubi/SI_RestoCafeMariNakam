<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_cafe;
use App\Models\tb_pegawai;
use PDF;


class tb_cafeController extends Controller
{
    public function index()
    {
        $cafe = tb_cafe::all();
        return view('cafe.cafe', compact('cafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pegawai = tb_pegawai::all();
        return view('cafe.tambah_cafe', compact('pegawai'));
    }

    public function insert(Request $request)
    {
        tb_cafe::create($request->all());
        return redirect()->route('cafeIndex');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Cafe)
    {
        $cafe = tb_cafe::find($ID_Cafe);
        $pegawai = tb_pegawai::all();
        return view('cafe.tambah_cafe-edit', compact('cafe', 'pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Cafe)
    {
        $cafe = tb_cafe::find($ID_Cafe);
        $cafe->update($request->all());
        return redirect()->route('cafeIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Cafe)
    {
        $cafe = tb_cafe::find($ID_Cafe);
        $cafe->delete();
        return redirect()->route('cafeIndex')->with('delete', 'Data Berhasil Dihapus !');
    }


    public function exportPDF()
    {
        $cafe = tb_cafe::all();
        view()->share('cafeIndex', $cafe);
        $pdf = PDF::loadview('cafe.cafepdf', compact('cafe'));
        return $pdf->stream('Cafe.pdf');
    }
}
