<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model{
    protected $table = 'todos';

    protected $fillable = [
        'name',
        'user_id',
    ];

    protected $casts = [
        'complete' => 'boolean',
    ];
}
