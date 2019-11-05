<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Roles extends Model
{
    use HasRoles;

    use SoftDeletes;

    public $table = 'roles';

    protected $primaryKey = 'id';

    public $fillable = [
        'name','guard_name',
    ];
}
