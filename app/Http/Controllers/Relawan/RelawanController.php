<?php

namespace App\Http\Controllers\Relawan;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RelawanController extends Controller
{
    /**
     * Show the form for register as relawan.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_kelurahan = DB::table('kelurahan')->get();
        $list_profesi = DB::table('ref_profesi')->get();
        $list_vendor_saving = DB::table('ref_vendor_saving')->get();
        $list_agama = DB::table('ref_agama')->get();

        return view('relawan.register', compact('list_kelurahan', 'list_profesi', 'list_vendor_saving', 'list_agama'));
    }

    /**
     * Store a newly registered relawan in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
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
        $email = DB::table('users')->where('id', Auth::id())->value('email');

        DB::table('relawan')->insert([
            'id_user' => Auth::id(),
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
            'token' => rand(100000, 999999),
            'email' => $email,
            'is_verified' => 0,
            'inserted_at' => now(),
            'inserted_by' => Auth::user()->name,
            'edited_by' => Auth::user()->name,
        ]);
    }

    /**
     * Show the form for verify as relawan.
     *
     * @return \Illuminate\Http\Response
     */
    public function verification()
    {
        return view('relawan.verification');
    }

    /**
     * Update a newly verified relawan in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request)
    {
        $data = DB::table('relawan')->where('id_user', Auth::id())->get();

        if($request->token == $data->token) {
            DB::table('relawan')->where('id_user', Auth::id())->update([
                'is_verified' => 1,
                'edited_by' => Auth::user()->name,
            ]);
        } else {
            return redirect()->route('relawan.verification')->with('error', "Token tidak sesuai");
        }
    }
}
