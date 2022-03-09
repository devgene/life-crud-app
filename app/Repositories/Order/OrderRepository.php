<?php

namespace App\Repositories\Order;

use App\Events\UserCreated;
use App\Models\Order;
use App\Repositories\Serviceclass\AbstractModelRepository;
use App\Repositories\Order\IOrder;
use Illuminate\Support\Facades\Event;

class OrderRepository extends AbstractModelRepository implements IOrder
{

    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

    public function createOrder( $request ){
        // $this->model;
    }
}
