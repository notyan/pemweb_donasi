<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\Provinsi;
use  App\Models\Kabupaten;
use  App\Models\Kecamatan;
use  App\Models\Kelurahan;
use  App\Models\Rekening;
use  App\Models\RefVendorSaving;

class AdminManajemenController extends Controller
{
    public function index(){
        $provinsi = Provinsi::all();
        $kabupaten = Kabupaten::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        return view('/admin/mgrWilayah',compact('provinsi','kabupaten','kecamatan','kelurahan'));
    }
    public function addProvinsi(Request $request){
        $provinsi = new Provinsi;
        $provinsi->nama = $request->namaProv;
        $provinsi->is_verified = 1;
        $provinsi->inserted_by = Auth::user()->name;
        $provinsi->edited_by = Auth::user()->name;
        $provinsi->save();
        return redirect('/admin/mgrWilayah');
    }
    public function addKabupaten(Request $request){
        $kabupaten = new Kabupaten;
        $kabupaten->nama = $request->namaKab;
        $kabupaten->id_provinsi = $request->idProv;
        $kabupaten->is_verified = 1;
        $kabupaten->inserted_by = Auth::user()->name;
        $kabupaten->edited_by = Auth::user()->name;
        $kabupaten->save();
        return redirect('/admin/mgrWilayah');
    }
    public function addKecamatan(Request $request){
        $kecamatan = new Kecamatan;
        $kecamatan->nama = $request->namaKec;
        $kecamatan->id_kabupaten = $request->idKab;
        $kecamatan->is_verified = 1;
        $kecamatan->inserted_by = Auth::user()->name;
        $kecamatan->edited_by = Auth::user()->name;
        $kecamatan->save();
        return redirect('/admin/mgrWilayah');
    }
    public function addKelurahan(Request $request){
        $kelurahan = new Kelurahan;
        $kelurahan->nama = $request->namaKel;
        $kelurahan->id_kecamatan = $request->idKec;
        $kelurahan->is_verified = 1;
        $kelurahan->inserted_by = Auth::user()->name;
        $kelurahan->edited_by = Auth::user()->name;
        $kelurahan->save();
        return redirect('/admin/mgrWilayah');
    }
    
    public function mgrRekening(Request $request){
        $vendor = RefVendorSaving::all();
        return view('/admin/mgrRekening',compact('vendor'));
    }
    public function addRekening(Request $request){
        $rekening = new Rekening;
        
        $rekening->id_vendor = $request->idVendor;
        $rekening->nama_rekening = $request->namaRek;
        $rekening->nomor_rekening = $request->noRek;
        $rekening->is_active = $request->isActive;
        $rekening->inserted_by = Auth::user()->name;
        $rekening->edited_by = Auth::user()->name;
        $rekening->save();
        return redirect('/admin/mgrRekening');
    }

}
