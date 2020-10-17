<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('news.categories', [
            'categories' => Category::all()
        ]);
    }

    public function show($slug) {
        $category = Category::query()->where('slug', $slug)->first();
        $news = $category->news;

       // $category->news->get();

        return view('news.category', [
            'news' => $news,
            'category' => $category
        ]);
    }
}
