<?php

namespace App\Repositories;

use App\Models\Service;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ServiceRepository extends BaseRepository
{
    protected $fieldSearchable =[
        'name',
        'image'
    ];

    public function getFieldsSearchable(): array{
        return $this->fieldSearchable;
    }

    public function model(): string{
        return Service::class;
    }

    public function create(array $input): Service{
        $model = $this->newInstance($input);
        $model->save();


        if(isset($input['image_file'])){
            $base64_image = $input['image_file'];
            if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
                $photo =$model->id. ".png";
                $data = substr($base64_image, strpos($base64_image, ',')+1);
                $data =$base64_decode($data);
                storage::disk("services") ->put($photo, $data);

                $model->update(["image"=> $photo]);
            }       
        }
    }

    public function update(array $input, string $id): Service{
        if(isset($input['image_file'])){
            $base64_image = $input['image_file'];
            if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
                $photo =$model->id. ".png";
                $data = substr($base64_image, strpos($base64_image, ',')+1);
                $data =$base64_decode($data);
                storage::disk("services") ->put($photo, $data);

                $input["image"]=$photo;
            }       
        }

        $query = $this->model->newQuery();
        $model = $query->findOrFail($id);
        $model->fill($input);
        $model->save();

        return $model;
    }
    
    public function delete( string $id){
        $query = $this->model->newQuery();
        $model = $query->findOrFail($id);

        $filepath = storage_path('App/public/services', $model->image);

        if(File::exists($filepath)){
            file::delete($filepath);
        }

        return $model->delete();
    }    


}

