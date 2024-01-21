<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends AppBaseModel
{
    public $table='services';
    public $fillable =[
        'name',
        'image'
    ];
}
