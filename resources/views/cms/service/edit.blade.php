@extends('layouts.app')
@section('title', 'Edit Service: ' . $data->name)
@section('subheader', true)
@section('buttons')

@endsection
@section('pagination-sample')

@endsection
@section('content')
<div class=" card card-custom gutter-b example example-compact">
    <div class="card header">
        <h3 class="card-title"> Form Data</h3>
        <div class="card-toolbar">
        </div>
    </div>
    {!! Form::model($data, array('route' => array('cms.service.update',$data->id, 'class'=> 'form')))!!}
    @method('PUT')

    <div class="card-body"></div>
        <div class="form-group row">
            <div class="col-lg-12"></div>
            <label>Name:</label>
            {!!Form::text('name', null, ['class'=>'form-control','required','placeholder'=>'Enter Service Name']) !!}
            <span class="form-text text-muted">Please Enter Your Galeri Name</span>
        </div>
        <div class="form-group row">
            <input type="hidden" name="image_file" id="imagebase64"/>
            <div class="col-lg-12">
                <label>Image</label></br>
                <div class="image-input w-100" id="image_file">
                 <div class="image-input-wrapper" style="background-color: whitesmoke !important; 
                        background-image: url('{{ asset('storage/sliders/'.$data->image) }}');
                        min-width: 100%;height: 440px;object-position: center;">
                </div>  
                <label class=" btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="change avatar">
                    <i class="fa fa-pen icon-sm text-text-muted"></i>
                    <input type="file" name="profile_avatar" id="profile_avatar" accept=".png .jpg. jpeg" />
                    <input type="hidden" name="profile_avatar_remove" id="profile_remove" />
                </label> 
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                        id="image_remove" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                        <i class="ki ki-bold-close icon-xs text-muted"></i>

                </span>
                </div>
            </div>
        </div>
        <div class="form-group-row">
            <label class="col-form-label text-left col-lg-3 col-sm-12">Status Galeri</label>
            <div class="col-lg-9 col-md-9 col-sm-12">
            <input data-switch="true" type="checkbox"{{ ($data->state) ? 'checked= "checked"' : ''}} name="state"/>
            </div>   
        </div>
        <div class="footer">
            <div class="row">
                <div resources/views/cms/service/edit.blade.phpclass="col-lg-6">
                    <a href="{{ route('cms.service.index') }}" type="reset" class="btn btn-secondary">cancel</a>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
        {!! form::close()!!}
</div>
@endsection
@push('script')
<script>
    var avatar3 = new KTImageInput('image_file');
    var KTBootstrapSwicth = function(){
        var demos = function(){

            $('[data-switch=true').bootsrapSwitch();
        }

        return{

            init: function (){
                demos();
            },
        };
    }();
    jQuery(document).ready(function (){
        KTBootstrapSwicth.init();
    })
    document.querySelector("image_remove").addEventListener("click", function (e){
        $("#image_base64").val("");
    });

    document.querySelector("#profile_avatar") .onchange = async(e) =>{
        if(e.target.files[0] !=null){
            var filename = e.target.files[0] .name;

            var extension = filename.substr(filename.lastIndexOf("."));
            var allowedExtensionsRegx= /(\.jpg|\.jpeg|\.png)$/i;
            var isAllowed =allowedExtensionsRegx.test(extension);

            const fsize =e.target.files[0].size;
            const file = Math.round((fsize/1024));

            if (isAllowed){
                if(file <= 1096){
                    let b64Data = await getBase64 (e.target.files[0]);
                    $("#image_base64") .val(b64Data);
                } else {
                    e.target.value='';
                    console.log("Max file Size is 1 MB");
                    return false;
                }
            }else {
                e.target.value='';
                console.log("Please Upload Image File");
                return false;
            }
            } else {
            return false;
            }
        }



</script>
@endpush