<?php

namespace App\Policies;

use App\Models\MzadType;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MzadTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any mzadType.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the mzadType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MzadType  $mzadType
     * @return mixed
     */
    public function view(User $user, MzadType $mzadType)
    {
        //
    }

    /**
     * Determine whether the user can create mzadType.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the mzadType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MzadType  $mzadType
     * @return mixed
     */
    public function update(User $user, MzadType $mzadType)
    {
        //
    }

    /**
     * Determine whether the user can delete the mzadType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MzadType  $mzadType
     * @return mixed
     */
    public function delete(User $user, MzadType $mzadType)
    {
        //
    }

    /**
     * Determine whether the user can restore the mzadType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MzadType  $mzadType
     * @return mixed
     */
    public function restore(User $user, MzadType $mzadType)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the mzadType.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\MzadType  $mzadType
     * @return mixed
     */
    public function forceDelete(User $user, MzadType $mzadType)
    {
        //
    }
}
