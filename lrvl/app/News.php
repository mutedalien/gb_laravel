<?php

namespace App;

use App\Rules\Ember;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App
 *
 * @property string title
 * @property string text
 * @property string image
 * @property boolean isPrivate
 */

class News extends Model
{
    protected $fillable = ['title', 'text', 'isPrivate', 'image', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id')->first();
    }

    public static function rules() {
        $tableNameCategory = (new Category())->getTable();
        return [
            'title' => ['required', 'min:10', 'max:20', new Ember()],
            'text' => 'required',
            'category_id' => "required|exists:{$tableNameCategory},id",
            'image' => 'mimes:jpeg,png,bmp|max:1000',
            'isPrivate' => 'boolean'
        ];
    }

    public static function attributeNames() {
        return [
            'title' => 'Заголовок новости',
            'text' => 'Текст новости',
            'category_id' => 'Категория новости',
            'image' => 'Изображение'
        ];
    }
}
