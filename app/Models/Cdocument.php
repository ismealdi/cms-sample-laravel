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

    public function documents(): Int
    {
        return $this->hasMany(Document::class, 'category_id','id')->count();
    }
}
