<?php

namespace App\Http\Controllers\CMS;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Repositories\ServiceRepository;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ServiceController extends CmsController
{
    private $serviceRepository;
    
    
    public function __construct(ServiceRepository $servicerepo) {
        $this->middleware('auth');
        $this->serviceRepository = $servicerepo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= $this->serviceRepository->all();
        return view('cms.service.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        

        return redirect()->route('cms.service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->serviceRepository->find($id);

        return view('cms.service.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       

        $input = $request->all();
        $service = $this->serviceRepository->update($input, $id);

        return redirect()->route('cms.service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->serviceRepository->find($id);

        if (empty($data)) {
            return $this->sendError('data not found');
        }

        $this->serviceRepository->delete($id);

        return $this->sendSuccess('Data deleted successfully');
    }
}
