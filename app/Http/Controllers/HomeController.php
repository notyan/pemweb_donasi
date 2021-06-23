<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\ProgramBerita;

class HomeController extends Controller
{
    public function index(Request $request){
        $program = Program::all();
        $programBerita = ProgramBerita::all();
        return view('/home',compact('program','programBerita'));
    }
}
