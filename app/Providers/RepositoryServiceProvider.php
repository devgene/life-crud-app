<?php

namespace App\Providers;

use App\Repositories\Product\IProduct;
use App\Repositories\Product\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(IProduct::class, ProductRepository::class);
    }
}
