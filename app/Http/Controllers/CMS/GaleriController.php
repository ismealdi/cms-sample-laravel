<?php

namespace App\Http\Controllers\CMS;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use App\Repositories\GaleriRepository;

class GaleriController extends CmsController
{

    private $galeriRepository;        
    
    public function __construct(GaleriRepository $galeriRepo) {
        $this->middleware('auth');
        $this->galeriRepository = $galeriRepo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->galeriRepository->all();

        return view('cms.galeri.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request["state"] = (isset($request["state"])) ? 1 : 0;

        $input = $request->all();
        $slider = $this->galeriRepository->create($input);

        return redirect()->route('cms.galeri.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->galeriRepository->find($id);

        return view('cms.slider.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request["state"] = (isset($request["state"])) ? 1 : 0;

        $input = $request->all();
        $slider = $this->galeriRepository->update($input, $id);

        return redirect()->route('cms.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->galeriRepository->find($id);

        if (empty($data)) {
            return $this->sendError('data not found');
        }

        $this->galeriRepository->delete($id);

        return $this->sendSuccess('Data deleted successfully');
    }
}
