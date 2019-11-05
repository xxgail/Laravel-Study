<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class ModelHasRoles extends Model
{
    use HasRoles;

    use SoftDeletes;

    public $table = 'model_has_roles';

    public $fillable = [
        'role_id','model_id','model_type',
    ];
}
