<?php

namespace App\Policies;

use App\Models\Province;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProvincePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any province.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the province.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province  $province
     * @return mixed
     */
    public function view(User $user, Province $province)
    {
        //
    }

    /**
     * Determine whether the user can create province.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the province.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province  $province
     * @return mixed
     */
    public function update(User $user, Province $province)
    {
        //
    }

    /**
     * Determine whether the user can delete the province.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province  $province
     * @return mixed
     */
    public function delete(User $user, Province $province)
    {
        //
    }

    /**
     * Determine whether the user can restore the province.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province  $province
     * @return mixed
     */
    public function restore(User $user, Province $province)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the province.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province  $province
     * @return mixed
     */
    public function forceDelete(User $user, Province $province)
    {
        //
    }
}
