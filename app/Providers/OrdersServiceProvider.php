<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OrdersServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Examples\Stitch\Orders\v1\OrderInterface',
            'App\Examples\Stitch\Orders\ProxyOrderRepository');

        $this->app->bind(
            'App\Examples\Stitch\Orders\v2\OrderInterface',
            'App\Examples\Stitch\Orders\EloquentOrderRepository');
    }
}
