<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class Roles extends Role
{
//    use HasRoles;

    use SoftDeletes;

    public $table = 'roles';

    protected $primaryKey = 'id';

    public $fillable = [
        'name','guard_name',
    ];
}
