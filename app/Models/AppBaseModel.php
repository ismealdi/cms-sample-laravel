<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

use Auth;

class AppBaseModel extends Model {

    use SoftDeletes, HasUuids;
    
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $hidden = ['created_by', 'updated_by','created_at', 'updated_at', 'deleted_at'];

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->created_by = Auth::id() ?: 0;
            $model->updated_by = Auth::id() ?: 0;
            
            // formating phone mask
            if (isset($model->phone)) {
                $model->phone = $model->formatPhone($model->phone);
            }            
        });

        static::updating(function ($model) {
            $model->updated_by = Auth::id();
                 
            // formating phone mask
            if (isset($model->phone)) {
                $model->phone = $model->formatPhone($model->phone);
            }
        });
    }

    private function formatPhone($number): String {
        return str_replace("_", "", str_replace(" ", "", $number));
    }

}