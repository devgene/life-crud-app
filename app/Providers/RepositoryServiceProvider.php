<?php

namespace App\Providers;

use App\Repositories\Order\IOrder;
use App\Repositories\Order\OrderRepository;

use App\Repositories\Product\IProduct;
use App\Repositories\Product\ProductRepository;

use App\Repositories\User\IUser;
use App\Repositories\User\UserRepository;
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
        $this->app->bind(IUser::class, UserRepository::class);
        $this->app->bind(IOrder::class, OrderRepository::class);
    }
}
