<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Provinsi;
use  App\Models\Kabupaten;
use  App\Models\Kecamatan;
use  App\Models\Kelurahan;

class AdminManajemenController extends Controller
{
    public function index(){
       return view('/admin/mgrWilayah');
    }
}
