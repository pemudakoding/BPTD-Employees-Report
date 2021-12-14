<?php

namespace App\Policies;

use App\Models\ActivityReport;
use App\Models\User;
use Illuminate\Auth\Access\{HandlesAuthorization, Response};

class ActivityReportPolicy
{
    use HandlesAuthorization;

    protected $level = 'asn';

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
        return $user->level === $this->level
            ?  Response::allow()
            : Response::deny('Kamu gak punya akses!');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ActivityReport  $activityReport
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ActivityReport $activityReport)
    {
        return ($user->level === $this->level)
            ?  Response::allow()
            : Response::deny('Kamu gak punya akses!');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
        return $user->level === $this->level
            ?  Response::allow()
            : Response::deny('Kamu gak punya akses!');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ActivityReport  $activityReport
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ActivityReport $activityReport)
    {


        return $user->id === $activityReport->user_id
            ?  Response::allow()
            : Response::deny('Kamu gak punya akses!');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ActivityReport  $activityReport
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ActivityReport $activityReport)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ActivityReport  $activityReport
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ActivityReport $activityReport)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ActivityReport  $activityReport
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ActivityReport $activityReport)
    {
        //
    }
}
