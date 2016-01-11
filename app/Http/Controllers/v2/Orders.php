<?php namespace App\Http\Controllers\v2;

use App\Examples\Stitch\Orders\v1\OrderInterface;
use App\Http\Controllers\BaseEndpointController;

class Orders extends BaseEndpointController
{
    /**
     * @param \App\Examples\Stitch\Orders\v1\OrderInterface $ordersRepository
     */
    public function __construct(OrderInterface $ordersRepository) {

    }
}
