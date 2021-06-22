<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\RefVendorSaving;


class RefVendorSavingController extends Controller
{
    public function index(){
       return view('/admin/mgrVendor');
    }
    public function addVendor(Request $request){
        $vendor = new RefVendorSaving;
        $vendor->nama = $request->nama;
        $vendor->inserted_by = Auth::user()->name;
        $vendor->edited_by =Auth::user()->name;
        $vendor->save();
        return redirect('/admin/mgrVendor');
    }
}
