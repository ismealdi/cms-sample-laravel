<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Clayanan extends Model
{
    public $table = 'clayanans';

    public $fillable = [
        'name',
        'slug',
       
    ];

    public function countNews(): Int
    {
        return $this->hasMany(Layanan::class, 'category_id','id')->count();
    }
}
