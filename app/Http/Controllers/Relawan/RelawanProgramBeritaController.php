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
    public function create()
    {
        // WYSIWYG using tinymce
        // <script src="https://cdn.tiny.cloud/1/xc7g3ykd3apgrbw5s1u17syg2grst5lrpt9sg5epz0dglib2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        return view('relawan.buatberita');
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
            'inserted_at' => now(),
            'inserted_by' => Auth::user()->name,
            'edited_by' => Auth::user()->name
        ]);
    }

    /**
     * Show the form for editing specified berita in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('program_berita')->where('id', $id)->get();

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
            'is_active'
        ]);

        DB::table('program_berita')->update([
            'judul' => $request->judul,
            'konten_berita' => $request->konten_berita,
            'is_active' => $request->is_active,
            'edited_by' => Auth::user()->name
        ]);
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
    }
}
