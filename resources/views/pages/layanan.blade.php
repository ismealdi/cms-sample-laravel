<!--page start-->
@extends('layouts.base')
@section('title', 'Pelayanan  ' . (isset($category) ? $category->name : ''))
@section('titlebar', false)
@section('statusbar', true)
@section("content")
@include('layouts.components.web.title')
<div class="site-main">

    <!-- sidebar -->
    <div class="sidebar ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-3 widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <aside class="widget widget-nav-menu">
                        <ul class="widget-menu box-shadow">
                            @foreach($services as $item)
                            <li class="{{ ($service->id == $item->id) ? 'active' : '' }}">
                                <a href="{{url('/layanan/'.$category->slug.'/'.$item->slaug )}}">
                                    {{ ucwords($item->title) }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-9 content-area">
                    <div class="ttm-service-single-content-area">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ttm_single_image-wrapper mb-35">
                                    <img class="img-fluid" src="{{ asset('storage/layanan/'.$service->banner) }}" alt="">
                                </div>
                                <div class="ttm-service-description">
                                    <h4>{{ $service->title }}</h4>
                                    <div class="sep_holder_box width-100 mb-20">
                                        <span class="sep_holder"><span class="sep_line"></span></span>
                                        <span class="sep_holder"><span class="sep_line"></span></span>
                                    </div>
                                    <div class="mb-35">
                                        {!! $service->content !!}    
                                    </div>
                                    <h4>Our Best Services Included</h4>
                                    <div class="sep_holder_box width-100 mb-20">
                                        <span class="sep_holder"><span class="sep_line"></span></span>
                                        <span class="sep_holder"><span class="sep_line"></span></span>
                                    </div>
                                    <!-- row -->
                                    <div class="row mt-15 mb-15">
                                        <div class="col-sm-6">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Lorem ipsum dolor sit amet, consectetur.</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Nemo enim ipsam voluptatem voluptas.</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">combined with handful of model sentence.</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">accusantium doloremque laudantium.</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">expedita distinctio. Nam libero tempore.</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Lorem ipsum dolor sit amet, consectetur.</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Nemo enim ipsam voluptatem voluptas.</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">combined with handful of model sentence.</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">accusantium doloremque laudantium.</span></li>
                                                <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">expedita distinctio. Nam libero tempore.</span></li>
                                            </ul>
                                        </div>
                                    </div><!-- row end -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-35">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquet odio non porta laoreet. Vestibulum in dui euismod, molestie quam porta, sagittis arcu. Pellentesque vitae pulvinar urna lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                            </div>
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-color-skincolor mb-20" href="#"> Download PDF<i class="fa fa-file-pdf-o"></i></a>
                                        </div>
                                    </div>
                                </div>
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

            </div>
        </div>
    </div>
</div>    
@endsection