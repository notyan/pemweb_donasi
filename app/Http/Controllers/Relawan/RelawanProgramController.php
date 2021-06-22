<?php

namespace App\Http\Controllers\Relawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RelawanProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_program = DB::table('program')->where('id_user', Auth::id())->get();

        return view('relawan.index', compact('list_program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('relawan.addprogram');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_program' => 'required',
            'info' => 'required',
            'target' => 'required',
            'batas_akhir' => 'required',
        ]);

        DB::table('program')->insert([
            'id_user' => Auth::id(),
            'nama_program' => $request->nama_program,
            'info' => $request->info,
            'target' => $request->target,
            'batas_akhir' => $request->batas_akhir,
            'inserted_at' => now(),
            'inserted_by' => Auth::user()->name,
            'edited_by' => Auth::user()->name
        ]);

        return redirect()->route('relawan.program.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('program')->where('id', $id)->get()->first();

        return view('relawan.showprogram', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('program')->where('id', $id)->get()->first();

        if($data->id_user != Auth::id())
            return redirect()->route('relawan.program.index');

        return view('relawan.editprogram', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_program' => 'required',
            'info' => 'required',
            'target' => 'required',
            'batas_akhir' => 'required',
        ]);

        DB::table('program')->where('id', $id)->update([
            'nama_program' => $request->nama_program,
            'info' => $request->info,
            'target' => $request->target,
            'batas_akhir' => $request->batas_akhir,
            'edited_by' => Auth::user()->name
        ]);

        return redirect()->route('relawan.program.detail', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('program_donatur')->where('id_program', $id)->delete();
        DB::table('program_berita')->where('id_program', $id)->delete();
        DB::table('program_funriser')->where('id_program', $id)->delete();
        DB::table('program_komplain')->where('id_program', $id)->delete();
        DB::table('program')->where('id', $id)->delete();

        return redirect()->route('relawan.program.index');
    }

    /**
     * Show list of program for registering as fundraiser at program.
     *
     * @return \Illuminate\Http\Response
     */
    public function regFundraiser()
    {
        $list_program = DB::table('program')->get();

        return view('relawan.regfund', compact('list_program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function fundraiser(Request $request, $id)
    {
        DB::table('program_funriser')->insert([
            'id_program' => $id,
            'id_user' => Auth::id(),
            'inserted_at' => now(),
            'inserted_by' => Auth::user()->name,
            'edited_by' => Auth::user()->name
        ]);

        return redirect()->route('relawan.program.fundraiser');
    }
}