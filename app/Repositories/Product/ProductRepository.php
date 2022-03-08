<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;
use App\Repositories\Product\IProduct;
use App\Repositories\Service\AbstractModelRepository;

class ProductRepository extends AbstractModelRepository implements IProduct
{

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }



}
