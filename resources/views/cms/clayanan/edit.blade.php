@extends('layouts.app')
@section('title', 'Edit layanan: ' . $data->name)
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
    {!! Form::model($data, array('route' => array('cms.clayanan.update', $data->id, 'class' =>
    'form'))) !!}
    @method('PUT')
    
    <div class="card-body">
        <div class="form-group row">
            <div class="col-lg-12">
                <label>Name:</label>
                {!! Form::text('name', null, ['class' => 'form-control', 'required',
                'placeholder' => 'Enter berita Name']) !!}
                <span class="form-text text-muted">Please enter your berita name</span>
            </div>
        </div>
        
        
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-lg-6">
                <a href="{{ route('cms.clayanan.index') }}" type="reset" class="btn btn-secondary">Cancel</a>
            </div>
            <div class="col-lg-6 text-lg-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
