<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_berita = DB::table('program_berita')->get();

        return view('program.index', compact('list_berita'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProgram($id)
    {
        $data = DB::table('program')->where('id', $id)->get()->first();

        return view('program.detail', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBerita($id)
    {
        $data = DB::table('program_berita')->where('id', $id)->get()->first();

        return view('program.berita', compact('data'));
    }
}
