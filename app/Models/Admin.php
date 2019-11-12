<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Model
{
    use HasRoles;

    use SoftDeletes;

    public $table = 'admin';

    protected $primaryKey = 'id';

    public $fillable = [
        'account','password','email'
    ];
}
