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
<link rel="stylesheet" href="{{asset('carousel/css/folder.css')}}">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


<div class="content py-4 d-flex justify-center">
    <div class="container mt-1 ">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <h4 class="header-title m-b-30"></h4>
                </div>
            </div>

            <div class="row">
                @foreach($documents as $document)
                <div class="col-lg-3 col-xl-3">
                    <a href="{{ url('laporan/'.$document->slug) }}" class="file-img-box"><img src="{{url('/images/folder.png')}}" alt="icon" width="180">
                    </a>
                    <div class="file-man-title">
                        <h5 class="mb-0 text-overflow">{{ ucwords($document->name) }}</h5>
                        <p class="mb-0"><small>{{ number_format($document->documents()) }} Dokumen</small></p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-3 d-none">
                <button type="button" class="btn btn-outline-danger w-md waves-effect waves-light"><i class="mdi mdi-refresh"></i> Load More Files</button>
            </div>
        </div>
    </div>
    <!-- end col -->

    <!-- container -->
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