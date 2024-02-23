<?php

namespace App\Http\Controllers\CMS;

use App\Models\Layanan;
use App\Models\Clayanan;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Repositories\ClayananRepository;
use App\Repositories\LayananRepository;
use Illuminate\Cache\RateLimiting\Limit;

class LayananController extends CmsController
{
    private $layananRepository, $clayananRepository;        
    
    public function __construct(LayananRepository $layananRepo, ClayananRepository $clayananRepo) {
        $this->middleware('auth');
        $this->layananRepository = $layananRepo;
        $this->clayananRepository = $clayananRepo;
    }
    
    public function index()
    {
        $data = $this->layananRepository->all();
    
        $data = Layanan::paginate(5);

        return view('cms.layanan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clayanans = $this->clayananRepository->all();
        return view('cms.layanan.create', compact('clayanans'));
    }

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
        $clayanans = $this->clayananRepository->all();
        $data = $this->layananRepository->find($id);

        return view('cms.layanan.edit', compact('data','clayanans'));
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

        if (empty($data)) {
            return $this->sendError('data not found');
        }

        $this->layananRepository->delete($id);

        return $this->sendSuccess('Data deleted successfully');
    }
}

