<?php

namespace App\Repositories\Eloquent;

use App\Http\Resources\UserResource;
use App\Models\CategoriesAdvertiser;
use App\Models\CategoriesCoach;
use App\Models\CategoriesConsultant;
use App\Models\CategoriesProvider;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Repositories\Service\AbstractModelRepository;
use App\Repositories\User\IUser;

class UserRepository extends AbstractModelRepository implements IUser
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }



}
