<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Layanan extends Model
{
    public $table = 'layanans';

    public $fillable = [
        'title',
        'banner',
        'category_id',
        'content',
        'slaug'
    ];

    public function category(): HasOne
    {
        return $this->hasOne(clayanan::class, 'id','category_id');
    }


}
