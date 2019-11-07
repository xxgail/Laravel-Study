<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Permissions extends \Spatie\Permission\Models\Permission
{
//    use HasRoles;

    use SoftDeletes;

    public $table = 'permissions';

    protected $primaryKey = 'id';

    public $fillable = [
        'name','guard_name',
    ];
}
