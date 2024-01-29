<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    public $table='layanans';
    public $fillable =[
        'name',
        'konten',
        'image'
    ];
}

