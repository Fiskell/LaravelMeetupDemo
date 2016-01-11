<?php namespace App\Http\Controllers\v2;

use App\Http\Controllers\BaseEndpointController;

class Orders extends BaseEndpointController
{
    public function __construct(App\Examples\Stitch\Orders\v1\OrderInterface $ordersRepository) {

    }
}
