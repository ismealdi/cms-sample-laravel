<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\News;
use App\Models\Cat_Layanan;

class WebController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $sliders = Slider::whereState(1)->limit(5)->get();
        return view('pages.home', compact('sliders'));
    }

    public function beritaDetail(string $slug, string $id = null) {
        $category = null;

        if(isset($slug)) {
            $category = Category::whereSlug($slug)->first();
        }
        
        $news = News::whereSlaug($id)->firstOrFail();

        $popular = News::inRandomOrder()
        ->limit(5)
        ->get();
        
        return view('pages.article', compact('news', 'category', 'popular'));
    }

    public function berita(string $slug = null) {
        $category = null;

        if(isset($slug)) {
            $category = Category::whereSlug($slug)->first();
        }

        $news = new News();

        if(isset($category)) {
            $news = $news->whereCategoryId($category->id);
        }

        $news = $news->paginate(6);
        $popular = News::inRandomOrder()
        ->limit(5)
        ->get();

        return view('pages.news', compact('news', 'category', 'popular'));
    }
}
