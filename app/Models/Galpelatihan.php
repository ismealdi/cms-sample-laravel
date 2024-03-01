<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galpelatihan extends Model
{
   public $table = 'galpelatihans';

   public $fillable = [
        'name',
        'image',
        'state',
   ];
   
   protected $casts = [
    'state' => 'boolean',
   ];
}
