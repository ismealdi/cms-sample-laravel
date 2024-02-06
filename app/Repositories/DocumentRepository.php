<?php

namespace App\Repositories;

use App\Models\Document;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DocumentRepository extends BaseRepository
{
    protected $fieldSearchable =[
        'name',
        'file'

    ];

    public function getFieldsSearchable(): array{
        return $this->fieldSearchable;
    }

    public function model(): string{
        return Document::class;
    }

    public function create(array $input): Document{
        $model = $this->model->newInstance($input);
        $model->save();
       
        if (isset($input['file'])) {
            $base64_image = $input["file"];
            // Periksa apakah string base64 adalah PDF
            if (preg_match('/^data:application\/pdf;base64,/', $base64_image)) {
                $pdfFileName = $model->id . ".pdf";
                $data = substr($base64_image, strpos($base64_image, ',') + 1);
                $decodedData = base64_decode($data);

                // Simpan PDF ke disk "Documents"
                Storage::disk("docpdf")->put($pdfFileName, $decodedData);

                // Perbarui nama file dalam array $input
                $model->update(["file" => $pdfFileName]);
       
            }       
        }
        
        return $model;
    }

    public function update(array $input, string $id): Document{
        if(isset($input['file'])) {
            $base64_image = $input["file"];
            if (preg_match('/^data:application\/pdf;base64,/', $base64_image)) {
                $pdfFileName = $id.".pdf";
                $data = substr($base64_image, strpos($base64_image, ',') + 1);
                $decodedData = base64_decode($data);

                Storage::disk("docpdf")->put($pdfFileName, $decodedData);

                $input["file"]=$pdfFileName;
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

        $filepath = storage_path('App/public/Document', $model->file);

        if(File::exists($filepath)){
            file::delete($filepath);
        }

        return $model->delete();
    }    


}

