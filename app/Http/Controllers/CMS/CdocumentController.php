<?php

namespace App\Http\Controllers\CMS;

use App\Models\Cdocument;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use App\Repositories\CdocumentRepository;

class CdocumentController extends CmsController
{
    private $cdocumentRepository;
    public function __construct(CdocumentRepository $cdocumentRepo){
        $this->middleware('auth');
        $this->cdocumentRepository = $cdocumentRepo;
    }
   
    public function index()
    {
        $data = $this->cdocumentRepository->all();
        return view('cms.cdocument.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.cdocument.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $cdocument= $this->cdocumentRepository->create($input);
        return redirect()->route('cms.cdocument.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cdocument $cdocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $data =$this->cdocumentRepository->find($id);
        return view('cms.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input =$request->all();
        $cdocuments=$this->cdocumentRepository->update($input,$id);
        return redirect()->route('cms.cdocument.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->cdocumentRepository->find($id);
        if(empty($data)){
            return $this->sendError('data not found');

        }
        $this->cdocumentRepository->delete($id);
        return $this->sendSuccess('Data Deleted Successfully');
    }
}
