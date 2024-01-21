<?php

namespace App\Http\Controllers\CMS;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use App\Repositories\SliderRepository;

class SliderController extends CmsController
{

    private $sliderRepository;        
    
    public function __construct(SliderRepository $sliderRepo) {
        $this->middleware('auth');
        $this->sliderRepository = $sliderRepo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->sliderRepository->all();

        return view('cms.slider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request["state"] = (isset($request["state"])) ? 1 : 0;

        $input = $request->all();
        $slider = $this->sliderRepository->create($input);

        return redirect()->route('cms.slider.index');
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
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->sliderRepository->find($id);

        if (empty($data)) {
            return $this->sendError('data not found');
        }

        $this->sliderRepository->delete($id);

        return $this->sendSuccess('Data deleted successfully');
    }
}
