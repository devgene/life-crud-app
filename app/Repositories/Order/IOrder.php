<?php

namespace App\Repositories\Order;

use App\Repositories\Serviceclass\IModelRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface IOrder extends IModelRepository
{
    public function createOrder( $request );
}
