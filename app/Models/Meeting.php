<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meeting extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'version',
        'status',
        'type',
        'date',
        'start',
        'end',
        'chairman_id',
        'called_by_id',
        'data',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'version' => 'integer',
        'date' => 'date',
        'start' => 'datetime',
        'end' => 'datetime',
        'chairman_id' => 'integer',
        'called_by_id' => 'integer',
        'data' => 'array',
    ];
}
