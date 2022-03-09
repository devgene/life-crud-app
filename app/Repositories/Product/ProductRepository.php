<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\Product\IProduct;
use App\Repositories\Serviceclass\AbstractModelRepository;

class ProductRepository extends AbstractModelRepository implements IProduct
{

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function addProduct($request)
    {
        return $this->model->create($request);
    }


    public function updateProduct($request,$id){

        $product= $this->model->find($id);

        return $this->model->update($product,$request);
    }
}
