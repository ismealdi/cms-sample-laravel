@extends('layouts.base')
@section('title')

@section('statusbar', true)
@section("content")



    <!--page start-->
    <section class="element-row element-style pb-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title clearfix">
                        <h2 class="title">Galeri</h2>
                    </div>
                </div>
            </div>
            <div class="row multi-columns-row ttm-boxes-row-wrapper pt-10">
                @foreach ($images as $image)
                <div class="ttm-box-col-wrapper ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image ttm-box-view-top-image">
                        <div class="ttm-box-view-content-inner">
                            <!-- featured-thumbnail -->
                            <div class="featured-thumbnail">
                                <a href="#"> <img class="img-fluid" src="{{ asset('storage/galeri/'.$image->image) }}" alt="image"></a>
                            </div><!-- featured-thumbnail end-->
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay col-lg-2 col-md-2 col-sm-2 ">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="{{ $image->name }}" data-rel="prettyPhoto" href="{{ asset('storage/galeri/'.$image->image) }}">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </div>
                            </div><!-- ttm-box-view-overlay end-->
                        </div>
                        <div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
                            <div class="featured-title">
                                <h5><a>{{ $image->name }}</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox -->
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- post end -->
    <div class="ttm-pagination">
        {!! $images->links() !!}
    </div>

    <section class="ttm-row fid-section ttm-bg ttm-bgcolor-skincolor clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
          <div class="row ttm-facts-colum-sep">
            <div class="col-md-3 col-sm-3 co-xs-12">
              <div class="ttm-fid inside ttm-fid-view-topicon">
                <div class="ttm-fid-icon-wrapper">
                  <i class="themifyicon ti-user"></i>
                </div>
                <div class="ttm-fid-contents">
                  <h4>
                    <span data-appear-animation="animateDigits" data-from="0" data-to="3215" data-interval="10" data-before="" data-before-style="sup" data-after="" data-after-style="sub">3215 </span>
                  </h4>
                  <h3 class="ttm-fid-title">
                    <span>Clients <br>
                    </span>
                  </h3>
                </div>
                <!-- ttm-fid-contents end -->
              </div>
            </div>
            <div class="col-md-3 col-sm-3 co-xs-12">
              <div class="ttm-fid inside ttm-fid-view-topicon">
                <div class="ttm-fid-icon-wrapper">
                  <i class="themifyicon ti-envelope"></i>
                </div>
                <div class="ttm-fid-contents">
                  <h4>
                    <span data-appear-animation="animateDigits" data-from="0" data-to="152" data-interval="5" data-before="" data-before-style="sup" data-after="" data-after-style="sub">152 </span>
                  </h4>
                  <h3 class="ttm-fid-title">
                    <span>Hospitals Rooms <br>
                    </span>
                  </h3>
                </div>
                <!-- ttm-fid-contents end -->
              </div>
            </div>
            <div class="col-md-3 col-sm-3 co-xs-12">
              <div class="ttm-fid inside ttm-fid-view-topicon">
                <div class="ttm-fid-icon-wrapper">
                  <i class="themifyicon ti-heart-broken"></i>
                </div>
                <div class="ttm-fid-contents">
                  <h4>
                    <span data-appear-animation="animateDigits" data-from="0" data-to="30" data-interval="10" data-before="" data-before-style="sup" data-after="" data-after-style="sub">30 </span>
                  </h4>
                  <h3 class="ttm-fid-title">
                    <span>Years of Experiance <br>
                    </span>
                  </h3>
                </div>
                <!-- ttm-fid-contents end-->
              </div>
            </div>
            <div class="col-md-3 col-sm-3 co-xs-12">
              <div class="ttm-fid inside ttm-fid-view-topicon">
                <div class="ttm-fid-icon-wrapper">
                  <i class="themifyicon ti-thumb-up"></i>
                </div>
                <div class="ttm-fid-contents">
                  <h4>
                    <span data-appear-animation="animateDigits" data-from="0" data-to="124" data-interval="10" data-before="" data-before-style="sup" data-after="" data-after-style="sub">124 </span>
                  </h4>
                  <h3 class="ttm-fid-title">
                    <span>Qualified Staffs <br>
                    </span>
                  </h3>
                </div>
                <!-- ttm-fid-contents end-->
              </div>
            </div>
          </div>
        </div>
      </section>
    
    
    @include('layouts.components.web.slideshow')
    
    
    <!-- fid-section end -->

    <!--team-section-->
        
    <!--footer end-->


@endsection


    