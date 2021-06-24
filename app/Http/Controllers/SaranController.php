<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Saran;

class SaranController extends Controller
{   

    public function mgrSaran(){
       $saran = Saran::all();
       return view('/admin/mgrSaran', [
           'saran' => $saran
       ]);
    }
    public function delSaran($id){
        $saran = Saran::find( $id);
        $saran->delete();
        echo ("Saran Sudah Terhapus.");
        return redirect('/admin/mgrSaran');
    }
    
    public function saran(){
        return view('saran');
    }
    
    public function createSaran(Request $request)
    {
        $saran = new Saran;
        $saran->nama = $request->nama;
        $saran->email= $request->email;
        $saran->no_hp = $request->noHp;
        $saran->subyek = $request->subyek;
        $saran->konten = $request->konten;
        $saran->inserted_by = $request->nama;
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'noHp' => 'required|min:8',
            'captcha' => 'required|captcha'
        ]);
        $saran->save();
        return redirect('/saran');
    }
    
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
