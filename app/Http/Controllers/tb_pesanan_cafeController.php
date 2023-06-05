<?php

namespace App\Http\Controllers;

use App\Models\tb_pesanan_cafe;
use App\Models\tb_cafe;
use App\Models\tb_pembeli;
use App\Models\tb_makanancafe;
use App\Models\tb_minumancafe;
use Illuminate\Http\Request;
use PDF;

class tb_pesanan_cafeController extends Controller
{
    public function index()
    {
        $pesanancafe = tb_pesanan_cafe::all();
        // $data = array("pesanancafe" => tb_pesanan_cafe::all());
        return view('pesanan.pesanancafe', compact('pesanancafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cafe = tb_cafe::all();
        $makanancafe = tb_makanancafe::all();
        $minumancafe = tb_minumancafe::all();
        $pembeli = tb_pembeli::all();
        return view('pesanan.tambah_pesanancafe', compact('cafe', 'makanancafe', 'pembeli', 'minumancafe'));
    }

    public function insert(Request $request)
    {
        tb_pesanan_cafe::create($request->all());
        return redirect()->route('pesanancafe');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ID_Pesanan_Cafe)
    {
        $pesanancafe = tb_pesanan_cafe::find($ID_Pesanan_Cafe);
        $cafe = tb_cafe::all();
        $makanancafe = tb_makanancafe::all();
        $minumancafe = tb_minumancafe::all();
        $pembeli = tb_pembeli::all();
        return view('pesanan.tambah_pesanancafe-edit', compact('pesanancafe','cafe', 'makanancafe', 'pembeli', 'minumancafe'));
    }

    // public function EditDoctorData($no_str){

    //     $doctor = Doctor::findOrFail($no_str);
    //     return view('admin.edit_doctor_data', compact('doctor'));
    // }//end method

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ID_Pesanan_Cafe)
    {
        $pesanancafe = tb_pesanan_cafe::find($ID_Pesanan_Cafe);
        $pesanancafe->update($request->all());
        return redirect()->route('pesanancafe')->with('edit', 'Data Berhasil Diubah !');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $ID_Pesanan_Cafe)
    {
        $pesanancafe = tb_pesanan_cafe::find($ID_Pesanan_Cafe);
        $pesanancafe->delete();
        return redirect()->route('pesanancafe')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $pesanancafe = tb_pesanan_cafe::all();
        view()->share('pesanancafe', $pesanancafe);
        $pdf = PDF::loadview('pesanan.pesanancafepdf', compact('pesanancafe'));
        return $pdf->stream('PesananCafe.pdf');
    }
}
