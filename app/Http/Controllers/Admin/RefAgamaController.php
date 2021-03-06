<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\RefAgama;


class RefAgamaController extends Controller
{
    public function index(){
        $agama = RefAgama::all();
       return view('/admin/mgrAgama', [
           'agama' => $agama
       ]);
    }
    public function delAgama($id){
        $agama = RefAgama::find( $id);
        $agama->delete();
        echo ("Agama Sudah Terhapus.");
        return redirect('/admin/mgrAgama');
    }
    public function addAgama(Request $request){
        $agama = new RefAgama;
        $agama->nama = $request->nama;
        $agama->is_active = $request->isActive;
        $agama->inserted_by = Auth::user()->name;
        $agama->edited_by =Auth::user()->name;
        $request->validate([
            'nama' => 'required',
            'isActive' => 'required',
        ]);
        $agama->save();
        return redirect('/admin/mgrAgama');
    }
}
