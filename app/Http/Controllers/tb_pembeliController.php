<?php

namespace App\Http\Controllers;

use App\Models\tb_pembeli;
use App\Models\tb_user;
use Illuminate\Http\Request;
use PDF;

class tb_pembeliController extends Controller
{
    public function index()
    {
        $pembeli = tb_pembeli::all();
        return view('pembeli.pembeli', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = tb_user::all();
        return view('pembeli.tambahpembeli', compact('user'));
    }

    public function insert(Request $request)
    {
        tb_pembeli::create($request->all());
        return redirect()->route('pembeli');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Pelanggan)
    {
        $pembeli = tb_pembeli::find($ID_Pelanggan);
        $user = tb_user::all();
        return view('pembeli.tambahpembeli-edit', compact('pembeli', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Pelanggan)
    {
        $pembeli = tb_pembeli::find($ID_Pelanggan);
        $pembeli->update($request->all());
        return redirect()->route('pembeli')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Pelanggan)
    {
        $pembeli = tb_pembeli::find($ID_Pelanggan);
        $pembeli->delete();
        return redirect()->route('pembeli')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $pembeli = tb_pembeli::all();
        view()->share('pembeli', $pembeli);
        $pdf = PDF::loadview('pembeli.pembelipdf', compact('pembeli'));
        return $pdf->stream('Pembeli.pdf');
    }
}
