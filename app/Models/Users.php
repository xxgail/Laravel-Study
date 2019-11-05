<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Users extends Model
{
    use HasRoles;

    public $table = 'users';

    public $fillable = ['name'];
}
