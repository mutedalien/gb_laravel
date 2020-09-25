<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {

        return view('admin.index');

    }

    public function aut()
    {
        return view('admin.aut');
    }

    public function cat()
    {
        return view('admin.cat');

    }

    public function news()
    {
        return view('admin.news');

    }

}
