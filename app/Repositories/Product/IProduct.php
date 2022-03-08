<?php

namespace App\Repositories\Product;

use App\Repositories\Model\IModelRepository;

interface IProduct extends IModelRepository
{
    public function create($request);
}
