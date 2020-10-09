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

    public function destroy(News $news) {
        $news->delete();
        return redirect()->route('admin.index')->with('success', 'Новость успешно удалена');
    }

    public function edit(News $news) {
        return view('admin.create', [
            'news' => $news,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, News $news) {
        $url = null;
        if ($request->file('image')) {
            $path = Storage::putFile('public', $request->file('image'));
            $url = Storage::url($path);

        }

        $news->image = $url;
        $result = $news->fill($request->except('image'))->save();

        if ($result) {
            return redirect()
                ->route('news.show', $news->id)
                ->with('success', 'Новость изменена!');
        } else {
            $request->flash();
            return redirect()
                ->route('admin.create')
                ->with('error', 'Ошибка!');
        }


    }

    public function create(Request $request) {

        if ($request->isMethod('post')) {

            $url = null;
            if ($request->file('image')) {
                $path = Storage::putFile('public', $request->file('image'));
                $url = Storage::url($path);

            }

            $news = new News();
            $news->image = $url;
            $news->fill($request->except('image'))->save();



            return redirect()->route('news.show', $news->id)->with('success', 'Новость добавлена!');
        }

//            $data = News::getNews();
//            $id = count($data) + 1;
//            $data[$id] = [
//                'id' => $id,
//                'title' => $request->title,
//                'category_id' => $request->category,
//                'text' => $request->text,
//                'isPrivate' => isset($request->isPrivate)
//            ];
//
//            Storage::disk('local')->put('news.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
//
//            return redirect()->route('news.index')->with('success', 'Новость добавлена!');
//        }



        return view('admin.create', [
            'categories' => Category::all(),
            'news' => new News()
        ]);
    }
}
