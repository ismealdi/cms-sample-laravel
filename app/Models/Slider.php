<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends AppBaseModel
{
    public $table = 'sliders';

    public $fillable = [
        'name',
        'image',
        'state'
    ];

    protected $casts = [
        'state' => 'boolean',
    ];

    
}
