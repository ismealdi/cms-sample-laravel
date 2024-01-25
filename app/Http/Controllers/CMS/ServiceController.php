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
    private $serviceRepsitory;
    
    
    public function __construct(ServiceRepository $servicerepo) {
        $this->middleware('auth');
        $this->serviceRepsitory = $servicerepo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= $this->serviceRepsitory->all();
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
        $request["state"] = (isset($request["state"])) ? 1 : 0;

        $input = $request->all();
        $service = $this->serviceRepsitory->create($input);
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
    public function edit(Service $service)
    {
        $data = $this->serviceRepsitory->find($id);

        return view('cms.service.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request["state"] = (isset($request["state"])) ? 1 : 0;

        $input = $request->all();
        $service = $this->serviceRepsitory->update($input, $id);

        return redirect()->route('cms.service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $data = $this->serviceRepsitory->find($id);

        if (empty($data)) {
            return $this->sendError('data not found');
        }

        $this->serviceRepsitory->delete($id);

        return $this->sendSuccess('Data deleted successfully');
    }
}
