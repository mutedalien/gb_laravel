<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index() {
        return view('admin.index');
    }


    public function test2() {

//        $export = new InovicesExport(News::getNews());
//        return Excel::downLoad($export, 'news.xls');

        return response()->json(News::getNews())
            ->header('Content-Disposition', 'attachment; filename = "json.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

        //return response()->download('10.jpg');
        //return view('admin.test2');
    }
}
