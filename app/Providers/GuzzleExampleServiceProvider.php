<?php namespace App\Providers;

use App\Examples\GuzzleExample\Wunderlist;
use Illuminate\Support\ServiceProvider;

class GuzzleExampleServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('Wunderlist', function () {
            return new Wunderlist();
        });
    }
}
