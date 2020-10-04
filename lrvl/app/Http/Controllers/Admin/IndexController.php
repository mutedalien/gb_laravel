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

    public function create(Request $request) {

        if ($request->isMethod('post')) {
            $arr = $request->all();

            \File::put(storage_path() . '\news.json' , json_encode($arr, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            //$request->flash();

            $data = News::getNews();
            $id = count($data) + 1;
            $data[$id] = [
                'id' => $id,
                'title' => $request->title,
                'category_id' => $request->category,
                'text' => $request->text,
                'isPrivate' => isset($request->isPrivate)
            ];

            Storage::disk('local')->put('news.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

            return redirect()->route('news.index')->with('success', 'Новость добавлена!');
        }

        return view('admin.create', [
            'categories' => Category::getCategories()
        ]);
    }

    public function test2() {

        return response()->json(News::getNews())
            ->header('Content-Disposition', 'attachment; filename = "json.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

        //return response()->download('10.jpg');
        //return view('admin.test2');
    }
}
