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
    public function indexBerita()
    {
        $list_berita = DB::table('program_berita')->where('is_active', 1)->get();

        return view('program.index', compact('list_berita'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBerita($id)
    {
        $data_berita = DB::table('program_berita')->where('id', $id)->get()->first();

        return view('program.berita', compact('data_berita'));
    }

    public function regDonatur($id)
    {
        $data_program = DB::table('program')->where('id', $id)->get()->first();
        $list_vendor = DB::table('ref_vendor_saving')->get();

        return view('program.donatur', compact('list_vendor', 'data_program'));
    }

    public function donate(Request $request, $id)
    {
        $request->validate([
            'nama_pengirim' => 'required',
            'vendor' => 'required',
            'no_rekening_pengirim' => 'required',
            'nama_atas_nama' => 'required',
            'nominal_donasi' => 'required',
            'email' => 'required',
            'pesan' => 'required'
        ]);
        
        $rekening = DB::table('rekening')->where('nomor_rekening', $request->no_rekening_pengirim)->get()->first();

        if ($rekening) {
            $id_rekening = $rekening->id;
        } else {
            DB::table('rekening')->insert([
                'id_vendor' => $request->vendor,
                'nama_rekening' => $request->nama_atas_nama,
                'nomor_rekening' => $request->no_rekening_pengirim,
                'is_active' => 1,
                'inserted_at' => now(),
                'inserted_by' => $request->nama_atas_nama,
            ]);

            $id_rekening = DB::table('rekening')->where('nomor_rekening', $request->no_rekening_pengirim)->get()->first()->id;
        }
        
        DB::table('program_donatur')->insert([
            'id_program' => $id,
            'nominal_donasi' => $request->nominal_donasi,
            'id_rekening' => $id_rekening,
            'nama_pengirim' => $request->nama_pengirim,
            'no_rekening_pengirim' => $request->no_rekening_pengirim,
            'nama_atas_nama' => $request->nama_atas_nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
            'status_verifikasi' => 0,
            'status_donasi' => 0,
            'inserted_at' => now(),
            'inserted_by' => $request->nama_pengirim
        ]);
        return redirect()->route('home');
    }
}
