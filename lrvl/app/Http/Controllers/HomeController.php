<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function ajax()
    {

        return response()->json([
            'text' => 'response'
        ]);
    }


}
