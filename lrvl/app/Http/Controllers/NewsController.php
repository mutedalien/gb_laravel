<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;

class NewsController extends Controller
{
    public function index() {
       // $news = DB::table('news')->get();

       // $news = News::all();


        $news = News::query()->paginate(3);



        return view('news.index')->with('news', $news);
    }

    public function show(News $news) {
       // $news = DB::table('news')->find($id);


         return view('news.One')->with('news', $news);
    }


}
