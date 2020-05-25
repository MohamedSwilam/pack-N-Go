<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class VisaDemandPolicy
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
        return request()->user()->hasPermissionTo('browse-visa-demand');
    }

    public function show()
    {
        return request()->user()->hasPermissionTo('view-visa-demand');
    }

    public function update()
    {
        return request()->user()->hasPermissionTo('edit-visa-demand');
    }

    public function destroy()
    {
        return request()->user()->hasPermissionTo('delete-visa-demand');
    }
}
