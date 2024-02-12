<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    public $table = 'galeris';

    public $fillable = [
        'name',
        'image',
        'state',
    ];

    protected $casts = [
        'state' => 'boolean',
    ];
}
