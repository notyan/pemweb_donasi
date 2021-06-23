<?php

namespace App\Http\Controllers\Relawan;

use App\Http\Controllers\Controller;
use App\Mail\KirimTokenRelawan;
use App\Models\Relawan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class RelawanController extends Controller
{
    public function dashboard()
    {
        return view('relawan.dashboard');
    }

    /**
     * Show the form for register as relawan.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (DB::table('relawan')->where('id_user', Auth::id())->get()->first()) {
            return redirect()->route('dashboard');
        }
        
        $list_kelurahan = DB::table('kelurahan')->get();
        $list_profesi = DB::table('ref_profesi')->get();
        $list_jk = DB::table('ref_vendor_saving')->get();
        $list_agama = DB::table('ref_agama')->get();

        return view('relawan.register', compact('list_kelurahan', 'list_profesi', 'list_agama', 'list_jk'));
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
            'no_wa' => 'required|unique:relawan',
            'id_kelurahan' => 'required',
            'id_profesi' => 'required',
            'id_jk' => 'required',
            'id_agama' => 'required',
        ]);

        $id_kec = DB::table('kelurahan')->where('id', $request->id_kelurahan)->value('id_kecamatan');
        $id_kab = DB::table('kecamatan')->where('id', $id_kec)->value('id_kabupaten');
        $id_provinsi = DB::table('kabupaten')->where('id', $id_kab)->value('id_provinsi');

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
            'email' => Auth::user()->email,
            'is_verified' => 0,
            'inserted_at' => now(),
            'inserted_by' => Auth::user()->name,
            'edited_by' => Auth::user()->name,
        ]);

        $relawan = Relawan::where('id_user', Auth::id())->get()->first();
        Mail::to($request->user())->send(new KirimTokenRelawan($relawan));

        return redirect()->route('relawan.verif');
    }

    /**
     * Show the form for verify as relawan.
     *
     * @return \Illuminate\Http\Response
     */
    public function verification()
    {
        if (DB::table('relawan')->where('id_user', Auth::id())->get()->first()->is_verified == 1) {
            return redirect()->route('dashboard');
        }
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
        $request->validate([
            'token' => 'required',
        ]);
        
        $data = DB::table('relawan')->where('id_user', Auth::id())->get()->first();

        if($request->token == $data->token) {
            DB::table('relawan')->where('id_user', Auth::id())->update([
                'is_verified' => 1,
                'edited_by' => Auth::user()->name,
            ]);
        } else {
            return redirect()->route('relawan.verif')->with('error', "Token tidak sesuai");
        }

        return redirect()->route('relawan.program.index');
    }
}
