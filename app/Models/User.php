<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'is_member',
        'is_boardmember',
        'is_administrator',
        'authentication',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_member' => 'boolean',
        'is_boardmember' => 'boolean',
        'is_administrator' => 'boolean',
        'authentication' => 'array',
    ];
}
