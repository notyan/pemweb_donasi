<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

date_default_timezone_set('Asia/Jakarta');

class HomeController extends Controller
{
    public function index(){
        $program = DB::table('program')->where('batas_akhir', '<=', date('Y-m-d'))->get();
        $programBerita = Db::table('program_berita')->where('is_active', 1)->get();
        $kontenBlog = DB::table('konten_blog')->get();
        return view('/home',compact('program','programBerita', 'kontenBlog'));
    }
}
