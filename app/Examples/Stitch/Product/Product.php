<?php namespace App\Examples\Stitch\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function find($id) {
        $this->instance('App\Examples\Stitch\Product\ProductRepositoryInterface', app('EloquentProductRepository'));
        return $this;
    }
}