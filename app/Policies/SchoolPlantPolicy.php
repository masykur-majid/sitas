<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\SchoolPlant;
use Illuminate\Auth\Access\HandlesAuthorization;

class SchoolPlantPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:SchoolPlant');
    }

    public function view(AuthUser $authUser, SchoolPlant $schoolPlant): bool
    {
        return $authUser->can('View:SchoolPlant');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:SchoolPlant');
    }

    public function update(AuthUser $authUser, SchoolPlant $schoolPlant): bool
    {
        return $authUser->can('Update:SchoolPlant');
    }

    public function delete(AuthUser $authUser, SchoolPlant $schoolPlant): bool
    {
        return $authUser->can('Delete:SchoolPlant');
    }

    public function restore(AuthUser $authUser, SchoolPlant $schoolPlant): bool
    {
        return $authUser->can('Restore:SchoolPlant');
    }

    public function forceDelete(AuthUser $authUser, SchoolPlant $schoolPlant): bool
    {
        return $authUser->can('ForceDelete:SchoolPlant');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:SchoolPlant');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:SchoolPlant');
    }

    public function replicate(AuthUser $authUser, SchoolPlant $schoolPlant): bool
    {
        return $authUser->can('Replicate:SchoolPlant');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:SchoolPlant');
    }

}