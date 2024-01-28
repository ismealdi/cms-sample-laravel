<?php

namespace App\Repositories;

use App\Models\Service;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

//use Your Model

/**
 * Class NewsRepository.
 */
class NewsRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        //return YourModel::class;
    }
}
