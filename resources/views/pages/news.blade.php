@extends('layouts.base')
@section('title', 'Berita ')
@section('titlebar', true)
@section('statusbar', true)
@section("content")

<div class="page sidebar-true">

    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ isset($category) ? $category->name : 'Semua Berita'}}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                    <span>
                                        <a title="Go to Delmont." href="{{ url('berita') }}" class="home"><i
                                                class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                    </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span>{{ isset($category) ? $category->name : ''}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">
                        @foreach($news as $article)
                        <article class="post ttm-blog-classic clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="{{ asset('storage/services/'.$article->banner) }}" alt="">
                                </div>
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="{{ $article['post-date'] }}">{{
                                            $article['post-date']->format('d') }}<span class="entry-month">{{
                                                $article['post-date']->format('M') }}<span class="entry-year">{{
                                                    $article['post-date']->format('y') }}</span></span></time>
                                    </span>
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-classic-content">
                                <div class="ttm-post-entry-header">
                                    <div class="post-meta">
                                        
                                        <span class="ttm-meta-line tags-links"><i class="fa fa-tag"></i>{{
                                            $article->category->name }}</span>
                                    </div>
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a
                                                href="{{ url('berita/'.(isset($article->category) ? $article->category->slug : 'x').'/'.$article->slaug) }}">{{
                                                strip_tags($article->title) }}</a>
                                        </h2>
                                    </header>
                                </div>
                                <div class="entry-content">
                                    <div class="ttm-box-desc-text">
                                        <p>{{ substr(strip_tags($article->content), 0, 250) }}</p>
                                    </div>
                                    <div class="ttm-blogbox-desc-footer">
                                        <div class="ttm-blogbox-footer-readmore">
                                            <div class="ttm-blogbox-footer-left">
                                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-black"
                                                    href="{{ url('berita/'.(isset($article->category) ? $article->category->slug : 'x').'/'.$article->slaug) }}">READ
                                                    MORE</a>
                                            </div>
                                        </div>
                                        <div class="ttm-social-share-wrapper">
                                            <div class="ttm-social-share-title">Share Post</div>
                                            <div class="social-icons circle">
                                                <ul>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"><i
                                                                class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article>
                        @endforeach

                        <!-- post end -->
                        <div class="ttm-pagination">
                            {!! $news->links() !!}
                        </div>
                    </div>
                    <div
                        class="col-lg-3 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-search">
                            <form role="search" method="get" class="search-form  box-shadow" action="#">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                                </label>
                                <input type="submit" class="search-submit" value="Search">
                            </form>
                        </aside>

                        <aside class="widget widget-recent-post">
                            <h3 class="widget-title">Popular News</h3>
                            <ul class="widget-post ttm-recent-post-list">
                                @foreach($popular as $item)
                                <li>
                                    <a href="{{ url('berita/'.(isset($item->category) ? $item->category->slug : 'x').'/'.$item->slaug) }}"><img
                                            src="{{ asset('storage/services/'.$item->banner) }}" alt="post-img"></a>
                                    <span class="post-date">{{
                                        $item['post-date']->format('M d, Y') }}</span>
                                    <a href="{{ url('berita/'.(isset($item->category) ? $item->category->slug : 'x').'/'.$item->slaug) }}">{{
                                        $item->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>

                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


    </div>
    @endsection