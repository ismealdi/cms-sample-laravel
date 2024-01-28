@extends('layouts.base')
@section('title')

@section('statusbar', true)
@section("content")
@include('layouts.components.web.titlepelatihan')



<link rel="stylesheet" href="{{asset('carousel/fonts/icomoon/style.css')}}">

<link rel="stylesheet" href="{{asset('carousel/css/owl.carousel.min.css')}}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('carousel/css/bootstrap.min.css')}}">

<!-- Style -->
<link rel="stylesheet" href="{{asset('carousel/css/style.css')}}">

<div class="site-main">

        <section class="ttm-row break-991-colum ttm-bgcolor-white clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- wrap-acadion -->
                        <div class="wrap-acadion">
                            <div class="accordion">
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey active">
                                    <div class="toggle-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <span class="ttm-title-text">Jadwal Pelatihan</span>
                                        </a>
                                    </div>
                                    <div class="toggle-content">
                                        <div class="row justify-content-center">
                                            <iframe src="{{ url('tema/images/MG.pdf') }}" width="50%" height="600">
                                            This browser does not support PDFs. Please download the PDF to view it: <a href="{{ url('tema/images/MG.pdf') }}">Download PDF</a>
                                            </iframe>
                                        </div>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <span class="ttm-title-text">Kalender Pelatihan</span>
                                        </a>
                                    </div>
                                    <div class="toggle-content">
                                        <div class="row justify-content-center">
                                            <iframe src="{{ url('tema/images/MG.pdf') }}" width="50%" height="600">
                                            <a href="{{ url('tema/images/MG.pdf') }}">Program Pelatiahan</a>
                                            </iframe>
                                        </div>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <span class="ttm-title-text">Galeri</span>
                                        </a>
                                    </div>
                                    <div class="toggle-content">
                                    <div class="row ttm-pf-single-related-wrapper ttm-boxes-row-wrapper">
                                    <div class="content">
                                        <div class="row multi-columns-row ttm-boxes-row-wrapper">
                                            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                                <!-- featured-imagebox -->
                                                <div class="featured-imagebox featured-imagebox-portfolio">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <a href="#"> <img class="img-fluid" src="images/portfolio/01.jpg" alt="image"></a>
                                                    </div><!-- featured-thumbnail end-->
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                        <div class="featured-iconbox ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Fitness Guidance to Patient" data-rel="prettyPhoto" href="images/portfolio/01.jpg">
                                                                <i class="ti ti-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="ttm-box-view-content-inner">
                                                            <div class="featured-content featured-content-portfolio">
                                                                <div class="featured-title">
                                                                    <h5><a href="single-style-1.html">Fitness Guidance to Patient</a></h5>
                                                                </div>
                                                                <span class="category">
                                                                    <a href="portfolio-category.html">Cardiology</a>,
                                                                    <a href="portfolio-category.html">Oncology</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                </div><!-- featured-imagebox -->
                                            </div>
                                            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                                <!-- featured-imagebox -->
                                                <div class="featured-imagebox featured-imagebox-portfolio">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <a href="#"> <img class="img-fluid" src="images/portfolio/02.jpg" alt="image"></a>
                                                    </div><!-- featured-thumbnail end-->
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                        <div class="featured-iconbox ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Diagnostic Imagine" data-rel="prettyPhoto" href="images/portfolio/02.jpg">
                                                                <i class="ti ti-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="ttm-box-view-content-inner">
                                                            <div class="featured-content featured-content-portfolio">
                                                                <div class="featured-title">
                                                                    <h5><a href="single-style-3.html">Diagnostic Imagine</a></h5>
                                                                </div>
                                                                <span class="category">
                                                                    <a href="portfolio-category.html">Orthopedics</a>,
                                                                    <a href="portfolio-category.html">Pharmacy</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                </div><!-- featured-imagebox -->
                                            </div>
                                            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                                <!-- featured-imagebox -->
                                                <div class="featured-imagebox featured-imagebox-portfolio">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <a href="#"> <img class="img-fluid" src="images/portfolio/03.jpg" alt="image"></a>
                                                    </div><!-- featured-thumbnail end-->
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                        <div class="featured-iconbox ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Orthodontics Surgery & Transplants" data-rel="prettyPhoto" href="images/portfolio/03.jpg">
                                                                <i class="ti ti-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="ttm-box-view-content-inner">
                                                            <div class="featured-content featured-content-portfolio">
                                                                <div class="featured-title">
                                                                    <h5><a href="single-style-3.html">Orthodontics Surgery & Transplants</a></h5>
                                                                </div>
                                                                <span class="category">
                                                                    <a href="portfolio-category.html">Anesthesiology</a>,
                                                                    <a href="portfolio-category.html">Orthopedics</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                </div><!-- featured-imagebox -->
                                            </div>
                                            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                                <!-- featured-imagebox -->
                                                <div class="featured-imagebox featured-imagebox-portfolio">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <a href="#"> <img class="img-fluid" src="images/portfolio/04.jpg" alt="image"></a>
                                                    </div><!-- featured-thumbnail end-->
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                        <div class="featured-iconbox ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Rehabilitation Center" data-rel="prettyPhoto" href="images/portfolio/04.jpg">
                                                                <i class="ti ti-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="ttm-box-view-content-inner">
                                                            <div class="featured-content featured-content-portfolio">
                                                                <div class="featured-title">
                                                                    <h5><a href="single-style-3.html">Rehabilitation Center</a></h5>
                                                                </div>
                                                                <span class="category">
                                                                    <a href="portfolio-category.html">Cardiology</a>,
                                                                    <a href="portfolio-category.html">Pharmacy</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                </div><!-- featured-imagebox -->
                                            </div>
                                            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                                <!-- featured-imagebox -->
                                                <div class="featured-imagebox featured-imagebox-portfolio">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <a href="#"> <img class="img-fluid" src="images/portfolio/05.jpg" alt="image"></a>
                                                    </div><!-- featured-thumbnail end-->
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                        <div class="featured-iconbox ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Blood Pressure Checkup" data-rel="prettyPhoto" href="images/portfolio/05.jpg">
                                                                <i class="ti ti-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="ttm-box-view-content-inner">
                                                            <div class="featured-content featured-content-portfolio">
                                                                <div class="featured-title">
                                                                    <h5><a href="single-style-3.html">Blood Pressure Checkup</a></h5>
                                                                </div>
                                                                <span class="category">
                                                                    <a href="portfolio-category.html">Anesthesiology</a>,
                                                                    <a href="portfolio-category.html">Pediatric</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                </div><!-- featured-imagebox -->
                                            </div>
                                            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                                <!-- featured-imagebox -->
                                                <div class="featured-imagebox featured-imagebox-portfolio">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <a href="#"> <img class="img-fluid" src="images/portfolio/06.jpg" alt="image"></a>
                                                    </div><!-- featured-thumbnail end -->
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                        <div class="featured-iconbox ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Dentures / Partial Dentures" data-rel="prettyPhoto" href="images/portfolio/06.jpg">
                                                                <i class="ti ti-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="ttm-box-view-content-inner">
                                                            <div class="featured-content featured-content-portfolio">
                                                                <div class="featured-title">
                                                                    <h5><a href="single-style-3.html">Dentures / Partial Dentures</a></h5>
                                                                </div>
                                                                <span class="category">
                                                                    <a href="portfolio-category.html">Oncology</a>,
                                                                    <a href="portfolio-category.html">Pharmacy</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                </div><!-- featured-imagebox -->
                                            </div>
                                             <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                                <!-- featured-imagebox -->
                                                <div class="featured-imagebox featured-imagebox-portfolio">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <a href="#"> <img class="img-fluid" src="images/portfolio/07.jpg" alt="image"></a>
                                                    </div><!-- featured-thumbnail end -->
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                        <div class="featured-iconbox ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Fluoride Treatment" href="https://youtu.be/JngC5CVeC6U"><i class="ti ti-control-play"></i></a>
                                                        </div>
                                                        <div class="ttm-box-view-content-inner">
                                                            <div class="featured-content featured-content-portfolio">
                                                                <div class="featured-title">
                                                                    <h5><a href="single-style-3.html">Fluoride Treatment</a></h5>
                                                                </div>
                                                                <span class="category">
                                                                    <a href="portfolio-category.html">Orthopedics</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                </div><!-- featured-imagebox -->
                                            </div>
                                            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                                <!-- featured-imagebox -->
                                                <div class="featured-imagebox featured-imagebox-portfolio">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <a href="#"> <img class="img-fluid" src="images/portfolio/08.jpg" alt="image"></a>
                                                    </div><!-- featured-thumbnail end -->
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                        <div class="featured-iconbox ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Dentures / Partial Dentures" data-rel="prettyPhoto" href="images/portfolio/08.jpg">
                                                                <i class="ti ti-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="ttm-box-view-content-inner">
                                                            <div class="featured-content featured-content-portfolio">
                                                                <div class="featured-title">
                                                                    <h5><a href="single-style-3.html">Periodontal Treatment</a></h5>
                                                                </div>
                                                                <span class="category">
                                                                    <a href="portfolio-category.html">Anesthesiology</a>,
                                                                    <a href="portfolio-category.html">Pediatric</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                </div><!-- featured-imagebox -->
                                            </div>
                                            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                                <!-- featured-imagebox -->
                                                <div class="featured-imagebox featured-imagebox-portfolio">
                                                    <!-- featured-thumbnail -->
                                                    <div class="featured-thumbnail">
                                                        <a href="#"> <img class="img-fluid" src="images/portfolio/09.jpg" alt="image"></a>
                                                    </div><!-- featured-thumbnail end -->
                                                    <!-- ttm-box-view-overlay -->
                                                    <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                        <div class="featured-iconbox ttm-media-link">
                                                            <a class="ttm_prettyphoto ttm_image" title="Dentures / Partial Dentures" data-rel="prettyPhoto" href="images/portfolio/09.jpg">
                                                                <i class="ti ti-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="ttm-box-view-content-inner">
                                                            <div class="featured-content featured-content-portfolio">
                                                                <div class="featured-title">
                                                                    <h5><a href="single-style-3.html">Oral Cancer Screening</a></h5>
                                                                </div>
                                                                <span class="category">
                                                                    <a href="portfolio-category.html">Cardiology</a>,
                                                                    <a href="portfolio-category.html">Oncology</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- ttm-box-view-overlay end-->
                                                </div><!-- featured-imagebox -->
                                            </div>
                                        </div>
    



   
  </div>
                            
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                    <div class="toggle-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <span class="ttm-title-text">Informasi dan Pendaftaran </span>
                                        </a>
                                    </div>
                                    <div class="toggle-content">
                                        <h6>First appointment, please bring the following:</h6>
                                        <ul>
                                            <li>Insurance card</li>
                                            <li>A picture Photo</li>
                                            <li>Any previous medical records (including test results from other clinics)</li>
                                            <li>All current medications (with prescription )</li>
                                        </ul>
                                        <h6>Repeat Patient Appointments</h6>
                                        <ul><li>All current medications (with prescription )</li></ul>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <!-- toggle end -->
                            </div>                   
                        </div><!-- wrap-acadion end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        
    </div>
            
</div>
</div>
</div>
      
<script src="{{asset('carousel/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('carousel/js/popper.min.js')}}"></script>
    <script src="{{asset('carousel/js/owl.bootstrap.min.js')}}"></script>
    <script src="{{asset('carousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('carousel/js/main.js')}}"></script>       
                        <!-- wrap-acadion -->
                        
                                
       
@endsection