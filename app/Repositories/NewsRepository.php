<?php

namespace App\Repositories;

use App\Models\News;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

//use Your Model

/**
 * Class NewsRepository.
 */
class NewsRepository extends BaseRepository
{
    protected $fieldSearchable =[
        'title',
        'banner',
        'podt-date',
        'category_id',
        'content',
        'slaug'
    ];

    public function getFieldsSearchable(): array {
        return $this->fieldSearchable;
    }
    public function model(): string{
        return News::class;
    }

    public function create(array $input): News {
        $input["slaug"] = str_replace(" ", "-", strtolower($input["title"]));
        $input["post-date"] = Carbon::now()->format("d-m-y");

        $model = $this->model->newInstance($input);
        $model->save();

        if(isset($input['image_file'])){
            $base64_image = $input['image_file'];
            if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
                $photo =$model->id. ".png";
                $data = substr($base64_image, strpos($base64_image, ',')+1);
                $data = base64_decode($data);

                storage::disk("services") ->put($photo, $data);

                $model->update(["banner"=> $photo]);
            }       
        }

        return $model;
    }
    public function update(array $input, string $id): News {
        if(isset($input['image_file'])) {
            $base64_image = $input["image_file"];
            if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
                $photo = $id.".png";
                $data = substr($base64_image, strpos($base64_image, ',') + 1);
                $data = base64_decode($data);

                storage::disk("services")->put($photo, $data);

                $input["banner"]=$photo;
            }       
        }

        $input["slaug"] = str_replace(" ", "-", strtolower($input["title"]));

        $query = $this->model->newQuery();
        $model = $query->findOrFail($id);
        $model->fill($input);
        $model->save();

        return $model;
    }
    public function delete(string $id) {        
        $query = $this->model->newQuery();
        $model = $query->findOrFail($id);

        $filepath = storage_path('app/public/services/'.$model->banner);

        if(File::exists($filepath)) {
            File::delete($filepath);
        }

        return $model->delete();
    }
}
