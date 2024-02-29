@extends('layouts.app')
@section('title', 'layanan')
@section('subheader', true)
@section('buttons')
<a href="{{ route('cms.layanan.create') }}" class="btn btn-light-primary font-weight-bold ml-2">Add Layanan</a>
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
                    <th scope="col">Slug</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr data-route="item-data-{{ $item->id }}">
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $item->title }}</td>
                    <td>
                        <span class="label label-inline label-light-primary font-weight-bold">
                            {{ $item->slaug }}
                        </span>
                    </td>
                    <td class="py-4">{{ isset($item->category) ? ucwords($item->category->name) : "-" }}</td>

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
            <div class="ttm-pagination">
                {{ $data->links() }}
            </div>
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