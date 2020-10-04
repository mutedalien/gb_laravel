<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        $response->assertSeeText("Админка");

    }

    public function controllersTest()
    {
        $feed = new NewsController();
        $this->assertNotEmpty($feed);
    }

    public function newsTest()
    {
        $news = new CategoryController();;
        $this->assertNotEmpty($news->index());
        $this->assertNotEmpty($news->show());
    }
}

