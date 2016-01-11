<?php namespace App\Http\Controllers\v1;

use App\Examples\Stitch\Orders\v2\OrderInterface;
use App\Http\Controllers\BaseEndpointController;

class Orders extends BaseEndpointController
{
    /**
     * @param \App\Examples\Stitch\Orders\v2\OrderInterface $ordersRepository
     */
    public function __construct(OrderInterface $ordersRepository) {

    }
}
