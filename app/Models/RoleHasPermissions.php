<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class RoleHasPermissions extends Model
{
    use HasRoles;

    use SoftDeletes;

    public $table = 'role_has_permissions';

    protected $primaryKey = 'id';

    public $fillable = [
        'role_id','permission_id'
    ];
}
