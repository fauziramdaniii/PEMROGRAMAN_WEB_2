<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapang extends Model
{
    protected $fillable = [
        'name',
    ];
    public function lapangs()
    {
        return $this->hasMany(Jadwal::class);
    }
}
