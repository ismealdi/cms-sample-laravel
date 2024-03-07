<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\News;
use App\Models\Cdocument;
use App\Models\Document;
use App\Models\Layanan;
use App\Models\Clayanan;
use App\Models\Galeri;
use App\Models\Galpelatihan;

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

    public function galeri()
    {
        $images = Galeri::paginate(6);

        return view('pages.', compact('images'));
    }
    public function galpelatihan()
    {
        $images = Galpelatihan::paginate(6);

        return view('pages.pelatihan', compact('images'));
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
        
        return view('pages.article', compact ('news', 'category', 'popular'));
        return view('components.web.footer',  compact ( 'popular'));
    }

    public function laporan() {
        $documents = Cdocument::all();
        return view('pages.laporan', compact('documents'));
    }

    public function laporanDocument(string $slug = null) {
        $doc = Cdocument::whereSlug($slug)->first();
        $documents = Document::whereCategoryId($doc->id)->get();

        return view('pages.filelaporan', compact('doc', 'documents'));
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

    public function layanan(string $slug = null) {
        $category = null;

        if(isset($slug)) {
            $category = clayanan::whereSlug($slug)->first();
        }

        $services = new Layanan();

        if(isset($category)) {
            $services = $services->whereCategoryId($category->id);
        }

        $services = $services->paginate(17);
        $service = $services[0];

        return view('pages.layanan', compact('category', 'services', 'service'));
    }

    public function layananDetail(string $slug, string $slaug = null) {
        $category = null;

        if(isset($slug)) {
            $category = clayanan::whereSlug($slug)->first();
        }

        $services = new Layanan();

        if(isset($category)) {
            $services = $services->whereCategoryId($category->id);
        }

        $services = $services->paginate(6);
        $service = Layanan::whereSlaug($slaug)->firstOrFail();
        
        return view('pages.layanan', compact('category', 'services', 'service'));
    }
}
