<?php

namespace App\Http\Controllers\Relawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RelawanProgramBeritaController extends Controller
{
    /**
     * Show the form for creating new berita.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $program = DB::table('program')->where('id', $id)->get()->first();
        $berita = DB::table('program_berita')->where('id_program', $id)->get()->first();

        if(Auth::id() != $program->id_user || $berita)
            return redirect()->route('relawan.program.index');
        // WYSIWYG using tinymce
        // <script src="https://cdn.tiny.cloud/1/xc7g3ykd3apgrbw5s1u17syg2grst5lrpt9sg5epz0dglib2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        $id_program = $program->id;

        return view('relawan.buatberita', compact('id_program'));
    }

    /**
     * Store the specified berita in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'konten_berita' => 'required',
        ]);

        DB::table('program_berita')->insert([
            'id_program' => $id,
            'judul' => $request->judul,
            'konten_berita' => $request->konten_berita,
            'is_active' => 1,
            'inserted_by' => Auth::user()->name,
            'edited_by' => Auth::user()->name
        ]);

        return redirect()->route('relawan.program.index');
    }

    /**
     * Show the form for editing specified berita in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('program_berita')->where('id', $id)->get()->first();
        $program = DB::table('program')->where('id', $data->id_program)->get()->first();
        
        if(Auth::id() != $program->id_user)
            return redirect()->route('relawan.program.index');

        return view('relawan.editberita', compact('data'));
    }

    /**
     * Update the specified berita in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'konten_berita' => 'required',
            'is_active' => 'required'
        ]);

        DB::table('program_berita')->where('id', $id)->update([
            'judul' => $request->judul,
            'konten_berita' => $request->konten_berita,
            'is_active' => $request->is_active,
            'edited_by' => Auth::user()->name
        ]);

        return redirect()->route('relawan.program.index');
    }

    /**
     * Remove the specified berita from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('program_berita')->where('id', $id)->delete();

        return redirect()->route('relawan.program.index');
    }
}
