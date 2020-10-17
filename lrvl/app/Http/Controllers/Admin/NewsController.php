<?php

namespace App\Http\Controllers\Admin;


use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use DB;

class NewsController extends Controller
{

    public function index() {

        $news = News::all();

        return view('admin.index')->with('news', $news);
    }


    public function store(Request $request) {

        $url = null;
        // dd($request->image);
        if ($request->file('image')) {
            $path = Storage::putFile('public', $request->file('image'));
            $url = Storage::url($path);

        }

        $this->validate($request, News::rules(), [], News::attributeNames());



        //TODO сделать обработку isPrivate
        $news = new News();
        $news->image = $url;

        $news->fill($request->except('image'))->save();



        return redirect()->route('news.show', $news->id)->with('success', 'Новость добавлена!');
    }

    public function create() {

        return view('admin.create', [
            'categories' => Category::all(),
            'news' => new News()
        ]);
    }

    public function destroy(News $news) {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Новость успешно удалена');
    }

    public function edit(News $news) {
        return view('admin.create', [
            'news' => $news,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, News $news) {
        $url = null;
        // dd($request->image);
        if ($request->file('image')) {
            $path = Storage::putFile('public', $request->file('image'));
            $url = Storage::url($path);

        }
        $this->validate($request, News::rules(), [], News::attributeNames());

        $news->image = $url;
        $news->isPrivate = ($request->isPrivate) ?? 0;
        $news->fill($request->except('image'))->save();



        return redirect()->route('news.show', $news->id)->with('success', 'Новость изменена!');
    }


}
