<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminKontenController extends Controller
{
    public function index()
    {
        $list_konten = DB::table('konten_blog')->where('id_user', Auth::id())->get();

        return view('admin.konten.index', compact('list_konten'));
    }

    public function create()
    {
        return view('admin.konten.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required'
        ]);

        DB::table('konten_blog')->insert([
            'id_user' => Auth::id(),
            'judul' => $request->judul,
            'konten' => $request->konten,
            'inserted_by' => Auth::user()->name,
            'edited_by' => Auth::user()->name,
            'verified_by' => Auth::user()->name,
            'verified_at' => now()
        ]);

        return redirect()->route('admin.konten.index');
    }

    public function edit($id)
    {
        $data = DB::table('konten_blog')->where('id', $id)->get()->first();

        return view('admin.konten.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required'
        ]);

        DB::table('konten_blog')->where('id', $id)->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'edited_by' => Auth::user()->name,
            'verified_by' => Auth::user()->name
        ]);

        return redirect()->route('admin.konten.index');
    }

    public function delete($id)
    {
        DB::table('konten_blog')->where('id', $id)->delete();

        return redirect()->route('admin.konten.index');
    }
}
