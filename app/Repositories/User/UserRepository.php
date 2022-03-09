<?php

namespace App\Repositories\User;

use App\Events\UserCreated;
use App\Models\User;
use App\Repositories\Serviceclass\AbstractModelRepository;
use App\Repositories\User\IUser;
use Illuminate\Support\Facades\Event;

class UserRepository extends AbstractModelRepository implements IUser
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }



    public function register( $request ){

        $user= $this->model->create($request);
       return Event::dispatch(new UserCreated($user));
    }
}
