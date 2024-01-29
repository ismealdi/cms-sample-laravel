<?php

namespace App\Http\Controllers\CMS;

use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Repositories\LayananRepository;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class LayananController extends CmsController
{
    private $layananRepository;

    public function __construct(LayananRepository $servicerepo) {
        $this->middleware('auth');
        $this->layananRepository = $servicerepo;
    }
        public function index()
    {
        $data= $this->layananRepository->all();
        return view('cms.layanan.index', compact('data'));   //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.layanan.create');    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $layanan = $this->layananRepository->create($input);

        return redirect()->route('cms.layanan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->layananRepository->find($id);

        return view('cms.layanan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $layanan = $this->layananRepository->update($input, $id);

        return redirect()->route('cms.layanan.index');   
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->layananRepository->find($id);

        if (empty($data)){
            return $this->sendError('data not found');
        }
        $this->layananRepository->delete($id);
        return $this->sendSuccess('Data deleted succesfully');
    }
}
