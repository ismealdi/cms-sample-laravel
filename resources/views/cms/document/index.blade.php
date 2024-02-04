@extends('layouts.app')
@section('title', 'News')
@section('subheader', true)
@section('buttons')
<a href="{{ route('cms.document.create') }}" class="btn btn-light-primary font-weight-bold ml-2">Add file</a>
@endsection
@section('pagination')
{!! $data->links() !!}
@endsection
@section('content')
<div class="card card-custom gutter-b example example-compact">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name File</th>
                    <th scope="col">File</th>
                    <th scope="col" class="text-right" width="5%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr data-route="item-data-{{ $item->id }}">
                    <td class="py-4">{{ ucwords($item->name) }}</td>
                    <td class="py-4">
                        @isset($item->file)
                        <a href="{{ asset('storage/docpdf/'.$item->file) }}" 
                            target="blank" 
                            class="text-dark font-weight-bold text-hover-primary text-xs">
                            <i class="fa fa-download"></i> Download
                        </a>
                        @else
                        -
                        @endisset
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
                                        <a href="{{ route('cms.document.edit', $item->id) }}" class="navi-link">
                                            <span class="navi-text">
                                                Edit
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a class="navi-link delete"
                                            data-route="{{ route('cms.document.destroy', $item->id) }}">
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