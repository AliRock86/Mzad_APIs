<?php

namespace App\Policies;

use App\Models\Outbidding;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OutbiddingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any outbidding.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the outbidding.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Outbidding  $outbidding
     * @return mixed
     */
    public function view(User $user, Outbidding $outbidding)
    {
        //
    }

    /**
     * Determine whether the user can create outbidding.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the outbidding.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Outbidding  $outbidding
     * @return mixed
     */
    public function update(User $user, Outbidding $outbidding)
    {
        //
    }

    /**
     * Determine whether the user can delete the outbidding.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Outbidding  $outbidding
     * @return mixed
     */
    public function delete(User $user, Outbidding $outbidding)
    {
        //
    }

    /**
     * Determine whether the user can restore the outbidding.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Outbidding  $outbidding
     * @return mixed
     */
    public function restore(User $user, Outbidding $outbidding)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the outbidding.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Outbidding  $outbidding
     * @return mixed
     */
    public function forceDelete(User $user, Outbidding $outbidding)
    {
        //
    }
}
