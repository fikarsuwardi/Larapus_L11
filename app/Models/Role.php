<?php

namespace App\Models;

use Laratrust\Models\Role as RoleModel;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;

class Role extends RoleModel
{
    public $guarded = [];
}
