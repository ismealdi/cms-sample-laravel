<?php

namespace App\Repositories;

use App\Models\Cdocument;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
 * Class CategoryRepository.
 */
class CdocumentRepository extends BaseRepository
{

    protected $fieldsearchable =[
        'name',
        'slug'
    ];

    public function getFieldsSearchable(): array {
        return $this->fieldsearchable;
    }
   
    public function model(): string{
        return Cdocument::class;
    }
    public function create(array $input): Cdocument {
        $input["slug"] = str_replace(" ", "-", strtolower($input["name"]));
        
        $model = $this->model->newInstance($input);
        $model->save();

        return $model;
    }
    public function update(array $input, string $id): Cdocument {
        $input["slug"] = str_replace(" ", "-", strtolower($input["name"]));

        $query = $this->model->newQuery();
        $model = $query->findOrFail($id);
        $model->fill($input);
        $model->save();

        return $model;
    }
    public function delete(string $id) {        
        $query = $this->model->newQuery();
        $model = $query->findOrFail($id);

        $filepath = storage_path('app/public/sliders/'.$model->image);

        if(File::exists($filepath)) {
            File::delete($filepath);
        }

        return $model->delete();
    }
}
