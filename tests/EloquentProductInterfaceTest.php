<?php

class EloquentProductInterfaceTest extends ProductInterfaceTest
{
    public function setUp() {
        // Set up application so that I can use the ioc container
        $this->refreshApplication();

        // Get the new implementation I want to resolve for ProductRepositoryInterface
        $eloquentProductRepository = app('App\Examples\Stitch\Product\EloquentProductRepository');

        // Set up my application to point to a different instance
        $this->instance('App\Examples\Stitch\Product\ProductRepositoryInterface', $eloquentProductRepository);

        // Call parent which will resolve repo for the ProductRepositoryInterface (the one we overwrote);
        parent::setUp();
    }
}