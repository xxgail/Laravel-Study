<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class ModelHasPermissions extends Model
{
    use HasRoles;

    use SoftDeletes;

    public $table = 'model_has_permissions';

    protected $primaryKey = 'id';

    public $fillable = [
        'permission_id','model_id','model_type',
    ];
}
