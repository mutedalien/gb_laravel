<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateTest extends DuskTestCase
{
    use RefreshDatabase;

    public function createExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('admin.create'))
                ->type('title', '123')
                ->type('content', 'test')
                ->press('Добавить')
                ->select('category_id', '2')
                ->assertSee('Количество символов в поле Заголовок новости должно быть не менее 10.')
                ->assertPathIs('/admin/create');
        });
    }

    public function failTitleExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('admin.create'))
                ->type('title', '123')
                ->type('content', '12345678912345678912345678')
                ->press('Добавить')
                ->assertSee('Количество символов в поле Заголовок новости должно быть не менее 10.')
                ->assertPathIs('/admin/create');
        });
    }
    public function failContentExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('admin.create'))
                ->type('title', '1234567891011')
                ->type('content', '1238')
                ->press('Добавить')
                ->assertSee('Количество символов в поле Текст новости должно быть не менее 20.')
                ->assertPathIs('/admin/create');
        });
    }
}
