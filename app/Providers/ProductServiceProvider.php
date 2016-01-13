<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Examples\Stitch\Product\ProductRepositoryInterface',
            'App\Examples\Stitch\Product\ProxyProductRepository');

        // TODO switch when we are ready to move off of proxy
//        $this->app->bind(
//            'App\Examples\Stitch\Product\ProductRepositoryInterface',
//            'App\Examples\Stitch\Product\EloquentProductRepository');
    }
}
