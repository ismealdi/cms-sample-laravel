@extends('layouts.app')
@section('title', 'Create Slider')
@section('subheader', true)
@section('buttons')

@endsection
@section('pagination-sample')

@endsection
@section('content')
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title">Form Data</h3>
        <div class="card-toolbar">
        </div>
    </div>
    <form class="form">
        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Slider Name" />
                    <span class="form-text text-muted">Please enter your slider name</span>
                </div>
                <div class="col-lg-6">
                    <label>Image</label><br />
                    <div class="image-input" id="image_file">
                        <div class="image-input-wrapper"
                            style="background-color: whitesmoke !important; min-width: 100%;"></div>
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                            data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="profile_avatar_remove" />
                        </label>

                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                            data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-6">
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@push('script')
<script>
    var avatar2 = new KTImageInput('image_file');
</script>
@endpush