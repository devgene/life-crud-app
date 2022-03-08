<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Service\AbstractModelRepository;
use App\Repositories\User\IUser;

class UserRepository extends AbstractModelRepository implements IUser
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }



}
