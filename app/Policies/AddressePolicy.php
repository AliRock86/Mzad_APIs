<?php

namespace App\Policies;

use App\Models\Addresse;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AddressePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any addresse.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the addresse.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Addresse  $addresse
     * @return mixed
     */
    public function view(User $user, Addresse $addresse)
    {
        //
    }

    /**
     * Determine whether the user can create addresse.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the addresse.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Addresse  $addresse
     * @return mixed
     */
    public function update(User $user, Addresse $addresse)
    {
        //
    }

    /**
     * Determine whether the user can delete the addresse.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Addresse  $addresse
     * @return mixed
     */
    public function delete(User $user, Addresse $addresse)
    {
        //
    }

    /**
     * Determine whether the user can restore the addresse.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Addresse  $addresse
     * @return mixed
     */
    public function restore(User $user, Addresse $addresse)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the addresse.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Addresse  $addresse
     * @return mixed
     */
    public function forceDelete(User $user, Addresse $addresse)
    {
        //
    }
}
