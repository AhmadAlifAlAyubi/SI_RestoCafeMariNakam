<?php

namespace App\Http\Controllers;

use App\Models\tb_minumanresto;
use App\Models\tb_restoran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
class tb_minumanrestoController extends Controller
{
    public function index()
    {
        $minumanresto = tb_minumanresto::all();
        return view('restoran.minumanresto', compact('minumanresto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restoran = tb_restoran::all();
        return view('restoran.tambah_minumanresto', compact('restoran'));
    }

    public function insert(Request $request)
    {
        tb_minumanresto::create($request->all());
        return redirect()->route('minumanrestoIndex');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Minuman)
    {
        $minumanresto = tb_minumanresto::find($ID_Minuman);
        $restoran = tb_restoran::all();
        return view('restoran.tambah_minumanresto-edit', compact('minumanresto','restoran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Minuman)
    {
        $minumanresto = tb_minumanresto::find($ID_Minuman);
        $minumanresto->update($request->all());
        return redirect()->route('minumanrestoIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Minuman)
    {
        $minumanresto = tb_minumanresto::find($ID_Minuman);
        $minumanresto->delete();
        return redirect()->route('minumanrestoIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $minumanresto = tb_minumanresto::all();
        view()->share('minumanrestoIndex', $minumanresto);
        $pdf = PDF::loadview('restoran.minumanrestopdf', compact('minumanresto'));
        return $pdf->stream('MinumanRestoran.pdf');
    }
}
