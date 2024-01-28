@extends('layouts.app')
@section('title', 'Create Category')
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
    <form class="form" action="{{ route('cms.category.store') }}" method="POST">
        @csrf

        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-12">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter berita Name" required />
                    <span class="form-text text-muted">Please enter your Category name</span>
                </div>
            </div>
            
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{ route('cms.slider.index') }}" type="reset" class="btn btn-secondary">Cancel</a>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
