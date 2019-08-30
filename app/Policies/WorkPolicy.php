<?php

namespace App\Policies;

use App\User;
use App\Work;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorkPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        if ($user->roles == 'admin') {
            return true;
        }
    }
    
    /**
     * Determine whether the user can view any works.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the work.
     *
     * @param  \App\User  $user
     * @param  \App\Work  $work
     * @return mixed
     */
    public function view(User $user, Work $work)
    {
        return true;
    }

    /**
     * Determine whether the user can create works.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if($user->roles == 'admin') {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the work.
     *
     * @param  \App\User  $user
     * @param  \App\Work  $work
     * @return mixed
     */
    public function update(User $user, Work $work)
    {
        if($user->roles == 'admin') {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the work.
     *
     * @param  \App\User  $user
     * @param  \App\Work  $work
     * @return mixed
     */
    public function delete(User $user, Work $work)
    {
        //
    }

    /**
     * Determine whether the user can restore the work.
     *
     * @param  \App\User  $user
     * @param  \App\Work  $work
     * @return mixed
     */
    public function restore(User $user, Work $work)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the work.
     *
     * @param  \App\User  $user
     * @param  \App\Work  $work
     * @return mixed
     */
    public function forceDelete(User $user, Work $work)
    {
        //
    }
}
