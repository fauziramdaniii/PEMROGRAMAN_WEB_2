<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
        'name', 'date', 'clock_start', 'clock_finish', 'day', 'wa',  'lapang_id'
    ];
    public function lapang()
    {
        return $this->belongsTo(Lapang::class, 'lapang_id');
    }
}
