<?php

namespace App\Http\Controllers\CMS;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use App\Repositories\CategoryRepository;

class CategoryController extends CmsController
{
   
    private $categoryRepository;
    public function __construct(CategoryRepository $categoryRepo){
        $this->middleware('auth');
        $this->categoryRepository = $categoryRepo;
    }

    public function index()

    {
        $data = $this->categoryRepository->all();

        return view('cms.category.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $category = $this->categoryRepository->create($input);

        return redirect()->route('cms.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $data = $this->categoryRepository->find($id);

        return view('cms.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $input = $request->all();
        $slider = $this->categoryRepository->update($input, $id);
        return redirect()->route('cms.category.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $id)
    {
        $data = $this->categoryRepository->find($id);

        if (empty($data)) {
            return $this->sendError('data not found');
        }

        $this->categoryRepository->delete($id);

        return $this->sendSuccess('Data deleted successfully');
    }
}
