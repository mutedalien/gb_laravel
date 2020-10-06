<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index() {

        $news = DB::table('news')->get();
        // dd($news);
        return view('news.index')->with('news', $news);
    }

    public function show($id) {
        $news = DB::table('news')->find($id);
        // dd($news);
        return view('news.One')->with('news', $news);
    }


}
