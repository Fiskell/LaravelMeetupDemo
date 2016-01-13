<?php namespace App\Console\Commands;

use App\Examples\GuzzleExample\Wunderlist;
use Illuminate\Console\Command;

class GuzzleExample extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:guzzle';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $wunderlist = new Wunderlist();

        dd($wunderlist->getListNames());

        /**
         * TODO ide-helper
         *
         * Add ide helper to composer
         *   composer require barryvdh/laravel-ide-helper
         *
         * Add service provider to app.php
         *   Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
         *
         * Run
         *   php artisan ide-helper:meta
         */
    }
}
