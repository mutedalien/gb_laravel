<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index() {
        return view('news.index')->with('news', News::getNews());
    }

    public function show($id) {
         return view('news.One')->with('news', News::getNewsId($id));
    }


}
