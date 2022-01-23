<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    protected $fillable = [
        'name', 'date', 'clock_start', 'clock_finish', 'day', 'wa'
    ];
}
