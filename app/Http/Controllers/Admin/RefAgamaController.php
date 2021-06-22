<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\RefAgama;


class RefAgamaController extends Controller
{
    public function index(){
       return view('/admin/mgrAgama');
    }
    public function addAgama(Request $request){
        $agama = new RefAgama;
        $agama->nama = $request->nama;
        $agama->is_active = $request->isActive;
        $agama->inserted_by = Auth::user()->name;
        $agama->edited_by =Auth::user()->name;
        $agama->save();
        return redirect('/admin/mgrAgama');
    }
}
