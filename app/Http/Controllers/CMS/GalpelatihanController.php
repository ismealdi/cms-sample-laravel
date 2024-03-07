<?php

namespace App\Http\Controllers\CMS;

use App\Models\Galpelatihan;
use Illuminate\Http\Request;
use App\Repositories\GalpelatihanRepository;
use Spatie\Html\Elements\Form;


class GalpelatihanController extends CmsController
{
    private $galpelatihanRepository;

    public function __construct(GalpelatihanRepository $galpelatihanRepo){
        $this->middleware('auth');
        $this-> galpelatihanRepository = $galpelatihanRepo;
        
    }
    public function index()
    {
        $data = $this ->galpelatihanRepository->all();
        return view ('cms.galpelatihan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.galpelatihan.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ["state"]= (isset ($request["state"]))? 1:0;

        $input = $request->all();
        $image =$this->galpelatihanRepository->create($input);
    }

    /**
     * Display the specified resource.
     */
    public function show(Galpelatihan $galpelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->galpelatihanRepository->find($id);

        return view('cms.galpelatihan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request['state'] =(isset($request["state"]))? 1:0;

        $input = $request->all();
        $image = $this->galpelatihanRepository->update($input, $id);
         
        return redirect()-> route('cms.galpelatihan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this ->galpelatihanRepository->find($id);

        if (empty($data)){
            return $this->sendError('data not found');

        }

        $this->galpelatihanRepository->delete($id);
        return $this->sendSuccess('Data Berhasil dihapus');
    }
}
