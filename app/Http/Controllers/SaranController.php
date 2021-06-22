<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Saran;

class SaranController extends Controller
{
    public function createSaran(Request $request)
    {
        $saran = new Saran;
        $saran->nama = $request->nama;
        $saran->email= $request->email;
        $saran->no_hp = $request->noHp;
        $saran->subyek = $request->subyek;
        $saran->konten = $request->konten;
        $saran->inserted_by = $request->nama;
        $saran->save();
        return redirect('/saran');
    }
}
