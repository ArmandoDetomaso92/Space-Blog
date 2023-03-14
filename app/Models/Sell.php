<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        // 'price',
        'cover',
        'description',
        ];

public function getShortDescriptionAttribute()
{
    $max_length = 200;
    return substr($this->attributes['description'], 0, $max_length).(strlen($this->attributes['description']) > $max_length ? '...' : '');
}
}