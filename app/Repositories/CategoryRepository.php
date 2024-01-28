<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
 * Class CategoryRepository.
 */
class CategoryRepository extends BaseRepository
{

    protected $fieldsearchable =[
        'name',
        'slug'
    ];

    public function getFieldsSearchable(): array {
        return $this->fieldSearchable;
    }
   
    public function model(): string{
        return Category::class;
    }
    public function create(array $input): Category {
        $input["slug"] = str_replace(" ", "-", strtolower($input["name"]));
        
        $model = $this->model->newInstance($input);
        $model->save();

        return $model;
    }
    public function update(array $input, string $id): Category {
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
