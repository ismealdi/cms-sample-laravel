<!--page start-->
@extends('layouts.base')
@section('title', "Berita")

@section('statusbar', true)
@section("content")

<div class="page sidebar-true">

    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ isset($news) ? $news->title : ''}}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                    <span>
                                        <a title="Go to Delmont." href="{{ url('berita') }}" class="home"><i
                                                class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                    </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span>
                                        <a title="Go to Delmont." href="{{ url('berita/'.$category->slug) }}">{{
                                            isset($category) ? $category->name : ''}}</a>
                                    </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span>Details</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main single">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">
                        <!-- post -->
                        <article class="post ttm-blog-classic clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="{{ asset('storage/services/'.$news->banner) }}" alt="">
                                </div>
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="{{ $news['post-date'] }}">{{
                                            $news['post-date']->format('d') }}<span class="entry-month">{{
                                                $news['post-date']->format('M') }}<span class="entry-year">{{
                                                    $news['post-date']->format('y') }}</span></span></time>
                                    </span>
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-classic-content">
                                <div class="post-meta">

                                    <span class="ttm-meta-line tags-links"><i class="fa fa-tag"></i>{{
                                        $news->category->name }}</span>
                                </div>
                                <div class="entry-content pt-5" align=justify>
                                    {!! $news->content !!}
                                    <div class="ttm-blogbox-desc-footer">
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
                                        <div class="clearfix"></div>
                                        <div class="ttm-post-prev-next-buttons d-none">
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-icon-btn-left ttm-btn-style-fill ttm-btn-color-skincolor mb-10"
                                                href="#"><i class="ti ti-angle-double-left"></i>Previous</a>
                                        </div>
                                    </div>
                                    <div class="ttm-blog-classic-box-comment d-none">
                                        <div id="comments" class="comments-area">
                                            <h2 class="comments-title">3 Replies to “How much aspirin to take for
                                                stroke”</h2>
                                            <ol class="comment-list">
                                                <li>
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard">
                                                            <img src="images/blog/blog-comment-01.jpg" class="avatar"
                                                                alt="comment-img">
                                                        </div>
                                                        <div class="comment-box">
                                                            <div class="comment-meta commentmetadata">
                                                                <cite class="ttm-comment-owner">Alex</cite>
                                                                <a href="#">February 14, 2019 at 8:41 am</a>
                                                            </div>
                                                            <div class="author-content-wrap">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Laudantium eius, sunt porro corporis maiores
                                                                    ea, voluptatibus omnis maxime</p>
                                                            </div>
                                                            <div class="reply">
                                                                <a rel="nofollow" class="comment-reply-link"
                                                                    href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="children comment">
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard">
                                                            <img src="images/blog/blog-comment-02.jpg" class="avatar"
                                                                alt="comment-img">
                                                        </div>
                                                        <div class="comment-box">
                                                            <div class="comment-meta">
                                                                <cite class="ttm-comment-owner">Cherieh</cite>
                                                                <a href="#">February 14, 2019 at 8:42 am</a>
                                                            </div>
                                                            <div class="author-content-wrap">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Laudantium eius, sunt porro corporis maiores
                                                                    ea, voluptatibus omnis maxime</p>
                                                            </div>
                                                            <div class="reply">
                                                                <a rel="nofollow" class="comment-reply-link"
                                                                    href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard">
                                                            <img src="images/blog/blog-comment-01.jpg" class="avatar"
                                                                alt="comment-img">
                                                        </div>
                                                        <div class="comment-box">
                                                            <div class="comment-meta">
                                                                <cite class="ttm-comment-owner">Alex</cite>
                                                                <a href="#">February 14, 2019 at 8:43 am</a>
                                                            </div>
                                                            <div class="author-content-wrap">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Laudantium eius, sunt porro corporis maiores
                                                                    ea, voluptatibus omnis maxime</p>
                                                            </div>
                                                            <div class="reply">
                                                                <a rel="nofollow" class="comment-reply-link"
                                                                    href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                            <div class="comment-respond">
                                                <h3 class="comment-reply-title">Leave a Reply</h3>
                                                <form action="#" method="post" id="commentform" class="comment-form">
                                                    <p class="comment-notes">Your email address will not be published.
                                                    </p>
                                                    <p class="comment-form-comment">
                                                        <textarea id="comment" placeholder="Comment" name="comment"
                                                            cols="45" rows="8" aria-required="true"></textarea>
                                                    </p>
                                                    <p class="comment-form-author">
                                                        <input id="author" placeholder="Name (required)" name="author"
                                                            type="text" value="" size="30" aria-required="true">
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <input id="email" placeholder="Email (required)" name="email"
                                                            type="text" value="" size="30" aria-required="true">
                                                    </p>
                                                    <p class="comment-form-url">
                                                        <input id="url" placeholder="Website" name="url" type="text"
                                                            value="" size="30">
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit"
                                                            class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor"
                                                            value="Post Comment">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article><!-- post end -->
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
                        <aside class="widget widget-categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                @foreach(\App\Models\Category::all() as $item)
                                <li><a href="{{url('/berita/'.$item->slug )}}">{{ $item->name }}</a><span>{{
                                        $item->countNews() }}</span></li>
                                @endforeach
                            </ul>
                        </aside>
                        <aside class="widget widget-recent-post">
                            <h3 class="widget-title">Popular News</h3>
                            <ul class="widget-post ttm-recent-post-list">
                                @foreach($popular as $item)
                                <li>
                                    <a href="{{ url('berita/'.$item->category->slug.'/'.$item->slaug) }}"><img
                                            src="{{ asset('storage/services/'.$item->banner) }}" alt="post-img"></a>
                                    <span class="post-date">{{
                                        $item['post-date']->format('M d, Y') }}</span>
                                    <a href="{{ url('berita/'.$item->category->slug.'/'.$item->slaug) }}">{{
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
</div>


@endsection