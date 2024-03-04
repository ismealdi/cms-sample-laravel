<?php

namespace App\Http\Controllers\CMS;

use App\Models\Clayanan;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use App\Repositories\ClayananRepository;

class ClayananController extends CmsController
{
    private $clayananRepository;
    public function __construct(ClayananRepository $clayananRepo){
        $this->middleware('auth');
        $this->clayananRepository = $clayananRepo;
    }
    public function index()
    {
        $data = $this->clayananRepository->all();

        return view('cms.clayanan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.clayanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $clayanan = $this->clayananRepository->create($input);

        return redirect()->route('cms.clayanan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(clayanan $clayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->clayananRepository->find($id);
        return view('cms.clayanan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $clayanan = $this->clayananRepository->update($input, $id);
        return redirect()->route('cms.clayanan.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->clayananRepository->find($id);

        if (empty($data)) {
            return $this->sendError('data not found');
        }

        $this->clayananRepository->delete($id);

        return $this->sendSuccess('Data deleted successfully');
    }
    
}
