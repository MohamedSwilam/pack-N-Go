<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class VisaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return request()->user()->hasPermissionTo('browse-visa');
    }

    public function store()
    {
        return request()->user()->hasPermissionTo('create-visa');
    }

    public function show()
    {
        return request()->user()->hasPermissionTo('view-visa');
    }

    public function update()
    {
        return request()->user()->hasPermissionTo('edit-visa');
    }

    public function destroy()
    {
        return request()->user()->hasPermissionTo('delete-visa');
    }
}
