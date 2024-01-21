<?php

namespace App\Http\Controllers\CMS;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Repositories\ServiceRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ServiceController extends CmsController
{
    private $serviceRepsitory;
    
    
    public function __construct(ServiceRepository $servicerepo= null) {
        $this->middleware('auth');
        $this->serviceRepsitory = $servicerepo;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cms.service.index');
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
