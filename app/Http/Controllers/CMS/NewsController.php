<?php

namespace App\Http\Controllers\CMS;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Repositories\NewsRepository;
use App\Repositories\CategoryRepository;

class NewsController extends CmsController
{
    private $newsRepository, $categoryRepository;        
    
    public function __construct(NewsRepository $newsRepo, CategoryRepository $categoryRepo) {
        $this->middleware('auth');
        $this->newsRepository = $newsRepo;
        $this->categoryRepository = $categoryRepo;
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
        $categories = $this->categoryRepository->all();
        return view('cms.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $news = $this->newsRepository->create($input);

        return dd($input);

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
        $categories = $this->categoryRepository->all();
        $data = $this->newsRepository->find($id);

        return view('cms.news.edit', compact('data','categories'));
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
