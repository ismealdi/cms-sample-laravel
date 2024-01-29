@extends('layouts.app')
@section('title', 'Layanan')
@section('subheader', true)
@section('buttons')
<a href="{{ route('cms.layanan.create') }}" class="btn btn-light-primary font-weight-bold ml-2">Add Service</a>
@endsection
@section('pagination-sample')

@endsection
@section('content')
<div class="card card-custom gutter-b example example-compact">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">konten</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr data-route="item-data-{{ $item->id }}">
                    <th scope="row">1</th>
                    <td>{{ $item->name }}</td>
                    <td>
                        <span class="font-weight-bold">
                            {{ $item->konten }}
                        </span>
                    </td>
                    <td>
                        <span class="font-weight-bold">
                            <div class="image-input image-input-outline" id="kt_image_1">
                                <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_1.jpg)"></div>
                            </div>
                        </span>

                    </td>
                    <td>
                        <div class="dropdown dropdown-inline">
                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ki ki-bold-more-hor"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-item">
                                        <a href="{{ route('cms.layanan.edit', $item->id) }}" class="navi-link">
                                            <span class="navi-text">
                                                Edit
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link delete"
                                            data-route="{{ route('cms.layanan.destroy', $item->id) }}">
                                            <span class="navi-text text-danger">
                                                Delete
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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