@extends('layouts.base')
@section('title', )
@section('titlebar', false)
@section('statusbar', true)
@section("content")

<div class="page sidebar-true">

    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ isset($category) ? $category->name : ''}}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                    <span>
                                        <a title="Go to Delmont." href="{{ url('layanan') }}" class="home"><i
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
    <div class="col-lg-9 content-area">
                    
        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">
                        @foreach($news as $item)
                        <article class="post ttm-blog-classic clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="{{ asset('storage/layanan/'.$item->banner) }}"
                                        alt="">
                                </div>
        
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-classic-content">
                                <div class="ttm-post-entry-header">
                                    <div class="post-meta">
                                        
                                        <span class="ttm-meta-line tags-links"><i class="fa fa-tag"></i>{{
                                            $item->category->name }}</span>
                                    </div>
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a
                                                href="{{ url('layanan/'.$item->category->slug.'/'.$item->slaug) }}">{{
                                                strip_tags($item->title) }}</a>
                                        </h2>
                                    </header>
                                </div>
                                <div class="entry-content">
                                    <div class="ttm-box-desc-text">
                                        <p>{{ substr(strip_tags($item->content), 0, 250) }}</p>
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article>
                        @endforeach

                

                        
                                        <h4>Layanan Poli KLnik RSPG</h4>
                                        <div class="sep_holder_box width-100 mb-20">
                                            <span class="sep_holder"><span class="sep_line"></span></span>
                                            <span class="sep_holder"><span class="sep_line"></span></span>
                                        </div>
                                        <!-- row -->
                                        <div class="row mt-15 mb-15">
                                            <div class="col-sm-6">
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Paru</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli MDR</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli DOTS</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Penyakit Dalam </span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Anak</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Jantung dan Pembuluh Darah</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Rehabilitasi Medik</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Kebidanan dan Kandungan</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Bedah Vaskuler</span></li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Bedah Umum</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Kulit dan Kelamin</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli KB</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Stunting</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Gariarti</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Imunisasi</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli VCT</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Poli Umum</span></li>                                                
                                                </ul>
                                            </div>
                                        </div><!-- row end -->
                                        
                                        <div class="row pt-15 mb_10">
                                        <div class="col-sm-12">
                                            <h4>Our Special Doctors</h4>
                                            <div class="sep_holder_box width-100 mb-20">
                                                <span class="sep_holder"><span class="sep_line"></span></span>
                                                <span class="sep_holder"><span class="sep_line"></span></span>
                                            </div>
                                            <div class="row ttm-boxes-row-wrapper">
                                                <div class="col-sm-4 ttm-box-col-wrapper">
                                                    <!-- featured-imagebox-team -->
                                                    <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                                                        <div class="featured-thumbnail">
                                                            <img class="img-fluid" src="images/team-member/team-img01.jpg" alt="image"> 
                                                        </div> 
                                                        <div class="ttm-box-view-overlay">
                                                            <div class="featured-iconbox ttm-media-link">
                                                                <a href="team-details.html"><i class="ti ti-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content featured-content-team">
                                                            <div class="ttm-team-position">Senior Dr. at Delmont</div>
                                                            <div class="featured-title">
                                                                <h5><a href="team-details.html">Dr. Metthew Wood</a></h5>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-imagebox-team end-->
                                                </div>
                                                <div class="col-sm-4 ttm-box-col-wrapper">
                                                    <!-- featured-imagebox-team -->
                                                    <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                                                        <div class="featured-thumbnail">
                                                            <img class="img-fluid" src="images/team-member/team-img02.jpg" alt="image">
                                                        </div> 
                                                        <div class="ttm-box-view-overlay">
                                                            <div class="featured-iconbox ttm-media-link">
                                                                <a href="team-details.html"><i class="ti ti-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content featured-content-team">
                                                            <div class="ttm-team-position">Cardiologist Specialist</div>
                                                            <div class="featured-title">
                                                                <h5><a href="team-details.html">Dr. Roy Coleman</a></h5>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-imagebox-team end-->
                                                </div>
                                                <div class="col-sm-4 ttm-box-col-wrapper">
                                                    <!-- featured-imagebox-team -->
                                                    <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                                                        <div class="featured-thumbnail">
                                                            <img class="img-fluid" src="images/team-member/team-img03.jpg" alt="image"> 
                                                        </div>
                                                        <div class="ttm-box-view-overlay">
                                                            <div class="featured-iconbox ttm-media-link">
                                                                <a href="team-details.html"><i class="ti ti-plus"></i></a>
                                                            </div>
                                                        </div> 
                                                        <div class="featured-content featured-content-team">
                                                            <div class="ttm-team-position">Neurology Specialist</div>
                                                            <div class="featured-title">
                                                                <h5><a href="team-details.html">Dr. Andrew Bert</a></h5>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-imagebox-team end-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                    
                        <!-- ttm-service-single-content-are -->
                        
                    </div>
                    <!-- ttm-service-single-content-are end -->
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


    <!--page start-->

@endsection


    