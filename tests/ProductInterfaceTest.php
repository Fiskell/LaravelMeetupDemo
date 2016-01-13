<?php

use App\Examples\Stitch\Product\ProductRepositoryInterface;

class ProductInterfaceTest extends TestCase
{
    /**
     * @var ProductRepositoryInterface $repo
     */
    protected $repo;

    public function setUp() {
        parent::setUp();
        $this->repo =  app('App\Examples\Stitch\Product\ProductRepositoryInterface');
    }

    public function test_get_all() {
        echo "\n" . get_class($this->repo) . "\n";

        $products = $this->repo->getAll();
        $this->assertTrue(is_array($products));
    }
}