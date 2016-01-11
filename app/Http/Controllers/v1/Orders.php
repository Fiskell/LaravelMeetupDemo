<?php namespace App\Http\Controllers\v1;

use App\Http\Controllers\BaseEndpointController;

class Orders extends BaseEndpointController
{
    public function __construct(App\Examples\Stitch\Orders\v1\OrderInterface $ordersRepository) {

    }
}
