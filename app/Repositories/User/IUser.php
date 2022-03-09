<?php

namespace App\Repositories\User;

use App\Repositories\Serviceclass\IModelRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface IUser extends IModelRepository
{
    public function register( $request );
}
