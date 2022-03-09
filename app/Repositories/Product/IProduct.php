<?php

namespace App\Repositories\Product;

use App\Repositories\Serviceclass\IModelRepository;

interface IProduct extends IModelRepository
{
    public function addProduct($request);
    public function updateProduct($request,$id);
}
