<?php

namespace App\Http\Controllers\CMS;

use App\Models\document;
use Illuminate\Http\Request;
use App\Http\Requests\DocumentRequest;
use App\Repositories\DocumentRepository;
use App\Repositories\CdocumentRepository;



class DocumentController extends CmsController
{
    private $documentRepository, $cdocumentRepository;
          
    
    public function __construct(DocumentRepository $documentRepo, CdocumentRepository $cdocumentRepo) {
        $this->middleware('auth');
        $this->documentRepository = $documentRepo;
        $this->cdocumentRepository = $cdocumentRepo;

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= $this->documentRepository->paginate(10);
        return view('cms.document.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cdocuments = $this->cdocumentRepository->all();
        return view('cms.document.create', compact('cdocuments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $document = $this->documentRepository->create($input);

        return redirect()->route('cms.document.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cdocuments=$this->cdocumentRepository->all();
        $data = $this->documentRepository->find($id);

        return view('cms.document.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $document = $this->documentRepository->update($input, $id);


        return redirect()->route('cms.document.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->documentRepository->find($id);

        if (empty($data)) {
            return $this->sendError('data not found');
        }

        $this->documentRepository->delete($id);

        return $this->sendSuccess('Data deleted successfully');
    }
}
