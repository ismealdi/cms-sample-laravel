@extends('layouts.base')
@section('title')

@section('statusbar', true)
@section("content")
@include('layouts.components.web.titlepelatihan')


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
                                </div>
                       
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
            
                        <!-- wrap-acadion -->
                        
                                
       
@endsection