<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\RefProfesi;


class RefProfesiController extends Controller
{
    public function index(){
       return view('/admin/mgrProfesi');
    }
    public function addProfesi(Request $request){
        $profesi = new RefProfesi;
        $profesi->nama = $request->nama;
        $profesi->is_active = $request->isActive;
        $profesi->inserted_by = Auth::user()->name;
        $profesi->edited_by =Auth::user()->name;
        $profesi->save();
        return redirect('/admin/mgrProfesi');
    }
}
