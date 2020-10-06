<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function create(Request $request) {

        if ($request->isMethod('post')) {

            $url = null;

            if ($request->file('image')) {
                $path = \Storage::putFile('public', $request->file('image'));
                $url = Storage::url($path);
            }

            $data = News::getNews();

            $addData = $request->except('_token');

            // dd($data);

            $data[] = $addData;

            $id = array_key_last($data);

            //dd($id);

            $data[$id]['isPrivate'] = isset($addData['isPrivate']);
            $data[$id]['id'] = $id;
            $data[$id]['image'] = $url;

            // dd($data);

            DB::table('news')->insert($data);
//            Storage::disk('local')->put('news.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
//            \File::put(storage_path() . '\news.json' , json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

            // $request->flash();

            return redirect()->route('news.show', $id)->with('success', 'Новость добавлена!');
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
            'categories' => Category::getCategories()
        ]);
    }
}
