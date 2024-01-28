<?php

namespace App\Http\Controllers\CMS;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Repositories\NewsRepository;

class NewsController extends CmsController
{
    private $newsRepository;        
    
    public function __construct(newsRepository $newsRepo) {
        $this->middleware('auth');
        $this->newsRepository = $newsRepo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->newsRepository->all();

        return view('cms.news.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $news = $this->newsRepository->create($input);

        return redirect()->route('cms.news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->newsRepository->find($id);

        return view('cms.news.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $input = $request->all();
        $news = $this->newsRepository->update($input, $id);
        return redirect()->route('cms.news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->newsRepository->find($id);

        if (empty($data)) {
            return $this->sendError('data not found');
        }

        $this->newsRepository->delete($id);

        return $this->sendSuccess('Data deleted successfully');
    }
}
