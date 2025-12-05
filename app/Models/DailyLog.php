<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'breakfast',
        'lunch',
        'dinner',
        'weight',
        'user_id',
        'log_date',
    ];
}
