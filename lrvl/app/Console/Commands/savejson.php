<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\News;
use App\Category;
use Illuminate\Support\Facades\Storage;

class savejson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save:json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        \File::put(storage_path() . '/news.json', json_encode(News::$news, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        \File::put(storage_path() . '/category.json', json_encode(Category::$categories, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}
