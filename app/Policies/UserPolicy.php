<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
    }

    public function create(User $user)
    {
        return $user->is_admin;
    }

    public function show(User $user, $model)
    {
        return $user->id === $model->id;
    }
}
