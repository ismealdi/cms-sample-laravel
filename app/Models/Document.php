<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    public $table = 'documents';

    public $fillable = [
        'name',
        'file',
        'category_id'
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Cdocument::class, 'id','category_id');
    }
    
    public function getFileSize() 
    {
        // Ensure $this->file_path begins with '/public/';
        return $this->formatBytes(Storage::size('public/docpdf/'.$this->file));
    }

    function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'Kb', 'Mb', 'Gb', 'Tb');   

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}
}
