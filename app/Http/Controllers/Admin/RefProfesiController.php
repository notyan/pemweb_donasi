<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\RefProfesi;


class RefProfesiController extends Controller
{
    public function index(){
       $profesi = RefProfesi::all();
       return view('/admin/mgrProfesi', [
           'profesi' => $profesi
       ]);
    }
    public function delProfesi($id){
        $profesi = RefProfesi::find( $id);
        $profesi->delete();
        echo ("Profesi Sudah Terhapus.");
        return redirect('/admin/mgrProfesi');
    }
    public function addProfesi(Request $request){
        $profesi = new RefProfesi;
        $profesi->nama = $request->nama;
        $profesi->is_active = $request->isActive;
        $profesi->inserted_by = Auth::user()->name;
        $profesi->edited_by =Auth::user()->name;
        $request->validate([
            'nama' => 'required',
            'isActive' => 'required',
        ]);
        $profesi->save();
        return redirect('/admin/mgrProfesi');
    }
}
