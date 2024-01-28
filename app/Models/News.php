<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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


}
