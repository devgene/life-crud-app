<?php

namespace App\Repositories\User;

use App\Events\UserCreated;
use App\Models\User;
use App\Repositories\Serviceclass\AbstractModelRepository;
use App\Repositories\User\IUser;
use Exception;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

class UserRepository extends AbstractModelRepository implements IUser
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }



    public function register( $request ){

        $user= $this->model->create($request);
        try{
            Event::dispatch(new UserCreated($user));
        }
        catch(Exception $e){
            Log::debug('email::'.$e);
        }

        return $user;
    }
}
