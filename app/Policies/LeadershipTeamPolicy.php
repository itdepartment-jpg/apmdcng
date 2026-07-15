<?php

namespace App\Policies;

use App\Models\LeadershipTeam;
use App\Models\User;

class LeadershipTeamPolicy
{
    public function viewAny(User $user)
    {
        return true; // Everyone can view
    }

    public function view(User $user, LeadershipTeam $member)
    {
        return true; // Everyone can view
    }

    public function create(User $user)
    {
        return $user->can('edit_leadership');
    }

    public function update(User $user, LeadershipTeam $member)
    {
        return $user->can('edit_leadership');
    }

    public function delete(User $user, LeadershipTeam $member)
    {
        return $user->can('edit_leadership');
    }
}
