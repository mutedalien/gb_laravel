<?php

namespace App;

class News
{
    private static $news = [
        '1' => [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'А у нас новость 1 и она очень хорошая!',
            'isPrivate' => false,
            'category_id' => 1
        ],
        '2' => [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'А у нас новость 2 и она очень очень хорошая!',
            'isPrivate' => false,
            'category_id' => 1
        ],
        '3' => [
            'id' => 3,
            'title' => 'Новость 3',
            'text' => 'А тут плохие новости(((',
            'isPrivate' => false,
            'category_id' => 2
        ],
        '4' => [
            'id' => 4,
            'title' => 'Новость 4',
            'text' => 'А тут плохие плохие новости(((',
            'isPrivate' => false,
            'category_id' => 2
        ],
    ];

    public static function getNewsByCategorySlug($slug) {
        $id = Category::getCategoryIdBySlug($slug);
        $news = [];
        foreach (static::$news as $item) {
            if ($item['category_id'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }

    public static function getNews()
    {
        return static::$news;
    }

    public static function getNewsId($id)
    {
        if (array_key_exists($id, static::$news))
            return static::$news[$id];
        else
            return [];
    }



}
