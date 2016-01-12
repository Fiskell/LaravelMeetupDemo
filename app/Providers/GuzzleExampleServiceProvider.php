<?php namespace App\Providers;

use App\Examples\GuzzleExample\Github;
use App\Examples\GuzzleExample\Wunderlist;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class GuzzleExampleServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('Github', function () {
            $client = new Client(['base_uri' => 'https://api.github.com/']);
            return new Github($client);
        });

        $this->app->bind('Wunderlist', function () {
            $client = new Client(['base_uri' => Wunderlist::$BASE_URL]);
            return new Wunderlist($client);
        });
    }
}
