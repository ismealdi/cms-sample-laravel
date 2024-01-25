@extends('layouts.app')
@section('title', 'Service')
@section('subheader', true)
@section('buttons')
<a href="{{ route('cms.service.create') }}" class="btn btn-light-primary font-weight-bold ml-2">Add Service</a>
@endsection
@section('pagination-sample')

@endsection
@section('content')
<div class="row list-item">
    
    <!--begin::Column-->
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6" data-route="i">
        <!--begin::Card-->
        <div class="card card-custom gutter-b card-stretch">
            <!--begin::Body-->
            <div class="card-body text-center pt-4">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end">
                    <div class="dropdown dropdown-inline">
                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ki ki-bold-more-hor"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover">
                                <li class="navi-item">
                                    <a href="{{ route('cms.service.edit', 'id') }}" class="navi-link">
                                        <span class="navi-text">
                                            Edit
                                        </span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a class="navi-link delete"
                                        data-route="{{ route('cms.service.destroy', 'id') }}">
                                        <span class="navi-text text-danger">
                                            Delete
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                    </div>
                </div>
                <!--end::Toolbar-->
                <div class="mt-7">
                    <img src="{{ asset('storage/service/') }}" alt="image" class="image-slider rounded">
                </div>
                <div class="my-4">
                    <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4"></a>
                </div>
                <!--end::Name-->
                <!--begin::Label-->
                <span
                    class="btn btn-text btn-light-{{ ('state') ? 'success' : 'danger'}} btn-sm font-weight-bold">{{
                    ('state') ? 'Active' : 'Not
                    Active' }}</span>
                <!--end::Label-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Column-->
   
</div>

@endsection
@push("script")
<script>
    addDeleteFunction();

    onDeleted = function (route) {
        $("div").find("[data-route='item-data-" + route.split("/").pop() + "']").remove();
    }
</script>
@endpush