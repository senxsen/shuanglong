<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    public $incrementing = false;
    //protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'status',
        'sort',
        'level',
    ];
}
