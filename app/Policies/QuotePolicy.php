<?php

namespace App\Policies;

use App\Models\User;
use App\Models\quote;
use Illuminate\Auth\Access\Response;

class QuotePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, quote $quote): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */


    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, quote $quote): bool
    {
        return $user->id === $quote->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, quote $quote): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, quote $quote): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, quote $quote): bool
    {
        return false;
    }
}
