<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToaNha extends Model
{
    protected $fillable = [
        'TenToaNha',
        'DiaChi',
        'MoTa'
    ];

    public function canho()
    {
        return $this->hasMany(Canho::class);
    }
}