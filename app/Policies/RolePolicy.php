<?php
namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function roleCheck(User $user, $roles)
    {
        return in_array($user->role, $roles);
    }
}
