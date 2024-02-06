<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cdocument extends Model
{
    public $table = 'cdocuments';

    public $fillable = [
        'name',
        'slug',
    ];

    public function countNews(): Int
    {
        return $this->hasMany(News::class, 'category_id','id')->count();
    }
}
