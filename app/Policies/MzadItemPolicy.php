<?php

namespace App\Policies;

use App\Models\MzadItem;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MzadItemPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any mzadItem.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the mzadItem.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MzadItem  $mzadItem
     * @return mixed
     */
    public function view(User $user, MzadItem $mzadItem)
    {
        //
    }

    /**
     * Determine whether the user can create mzadItem.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the mzadItem.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MzadItem  $mzadItem
     * @return mixed
     */
    public function update(User $user, MzadItem $mzadItem)
    {
        //
    }

    /**
     * Determine whether the user can delete the mzadItem.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MzadItem  $mzadItem
     * @return mixed
     */
    public function delete(User $user, MzadItem $mzadItem)
    {
        //
    }

    /**
     * Determine whether the user can restore the mzadItem.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MzadItem  $mzadItem
     * @return mixed
     */
    public function restore(User $user, MzadItem $mzadItem)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the mzadItem.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MzadItem  $mzadItem
     * @return mixed
     */
    public function forceDelete(User $user, MzadItem $mzadItem)
    {
        //
    }
}
