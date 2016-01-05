<?php namespace App\Providers;

use App\Examples\MethodInjection\Betrayal;
use Illuminate\Support\ServiceProvider;

class MethodInjectionServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('BetrayalInterface', function() {
            return new Betrayal();
        });
    }
}
