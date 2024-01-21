<?php

namespace App\Http\Controllers\CMS;

use App\Models\Slider;
use Illuminate\Http\Request;
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
        return view('cms.slider.index');
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
        //
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
    public function destroy(Slider $slider)
    {
        //
    }
}
