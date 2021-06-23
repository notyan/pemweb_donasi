<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $list_blog = DB::table('konten_blog')->get();

        return view('blog.list', compact('list_blog'));
    }

    public function show($id)
    {
        $data = DB::table('konten_blog')->where('id', $id)->get()->first();

        return view('blog.baca', compact('data'));
    }
}
