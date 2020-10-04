<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('news.categories', [
            'categories' => Category::getCategories()
        ]);
    }

    public function show($slug) {
        return view('news.category', [
            'news' => News::getNewsByCategorySlug($slug),
            'category' => Category::getCategoryNameBySlug($slug)
        ]);
    }
}
