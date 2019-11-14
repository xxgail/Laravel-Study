<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Student extends Model
{
    use HasRoles;


    use SoftDeletes;

    public $table = 'student';

    protected $primaryKey = 'id';

    public $fillable = [
        'name','gender','age',
    ];
}
