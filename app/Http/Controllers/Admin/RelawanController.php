<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

date_default_timezone_set('Asia/Jakarta');

class RelawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relawans = DB::table('relawan')->get();

        return view('admin.relawan.index', compact('relawans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = DB::table('users')->get();
        $kelurahans = DB::table('kelurahan')->get();
        $profesis = DB::table('ref_profesi')->get();
        $jks = DB::table('ref_vendor_saving')->get();

        return view('admin.relawan.create', compact('users', 'kelurahans', 'profesis', 'jks'));
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
            'id_user' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'alamat_ktp' => 'required',
            'no_wa' => 'required',
            'id_kelurahan' => 'required',
            'id_profesi' => 'required',
            'id_jk' => 'required',
            'id_agama' => 'required',
        ]);

        $id_kec = DB::table('kelurahan')->where('id', $request->id_kelurahan)->value('id_kecamatan');
        $id_kab = DB::table('kecamatan')->where('id', $id_kec)->value('id_kabupaten');
        $id_provinsi = DB::table('kabupaten')->where('id', $id_kab)->value('id_provinsi');
        $email = DB::table('users')->where('id', $request->id_user)->value('email');

        DB::table('relawan')->insert([
            'id_user' => $request->id_user,
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'alamat_ktp' => $request->alamat_ktp,
            'no_wa' => $request->no_wa,
            'id_provinsi' => $id_provinsi,
            'id_kab' => $id_kab,
            'id_kec' => $id_kec,
            'id_kelurahan' => $request->id_kelurahan,
            'id_profesi' => $request->id_profesi,
            'id_jk' => $request->id_jk,
            'id_agama' => $request->id_agama,
            'token' => Hash::make($email),
            'email' => $email,
            'is_verified' => 1,
            'inserted_by' => Auth::user()->name,
            'edited_by' => Auth::user()->name,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('relawan')->where('id', $id);

        return view('admin.relawan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('relawan')->where('id', $id);

        return view('admin.relawan.edit', compact('data'));
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
            'id_user' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'alamat_ktp' => 'required',
            'no_wa' => 'required',
            'id_kelurahan' => 'required',
            'id_profesi' => 'required',
            'id_jk' => 'required',
            'id_agama' => 'required',
        ]);

        $id_kec = DB::table('kelurahan')->where('id', $request->id_kelurahan)->value('id_kecamatan');
        $id_kab = DB::table('kecamatan')->where('id', $id_kec)->value('id_kabupaten');
        $id_provinsi = DB::table('kabupaten')->where('id', $id_kab)->value('id_provinsi');
        $email = DB::table('users')->where('id', $request->id_user)->value('email');

        DB::table('relawan')->where('id', $id)->update([
            'id_user' => $request->id_user,
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'alamat_ktp' => $request->alamat_ktp,
            'no_wa' => $request->no_wa,
            'id_provinsi' => $id_provinsi,
            'id_kab' => $id_kab,
            'id_kec' => $id_kec,
            'id_kelurahan' => $request->id_kelurahan,
            'id_profesi' => $request->id_profesi,
            'id_jk' => $request->id_jk,
            'id_agama' => $request->id_agama,
            'token' => Hash::make($email),
            'email' => $email,
            'is_verified' => 1,
            'edited_at' => date("Y-m-d H:i:s"),
            'edited_by' => Auth::user()->name,
        ]);

        return redirect()->route('superrelawan.index')->with('success', 'Relawan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('relawan')->where('id', $id)->delete();

        return redirect()->route('superrelawan.index')->with('success', 'Relawan berhasil dihapus');
    }
}
