<?php

namespace App\Console\Commands;

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
    public function handle()
    {
//        $github = new Github();
//        $github->getInfo('Fiskell');

        $google = app('Wunderlist');
        $google->getLists();
    }
}
