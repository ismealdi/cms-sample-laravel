<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class News extends Model
{
    public $table = 'news';

    public $fillable = [
        'title',
        'banner',
        'post-date',
        'category_id',
        'content',
        'slaug'
    ];

    protected $casts = [
        'post-date' => 'datetime',
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id','category_id');
    }


}
