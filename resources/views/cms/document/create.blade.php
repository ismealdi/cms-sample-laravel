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
    <form class="form" action="{{ route('cms.document.store') }}" method="POST">
        @csrf

        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-12">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter berita Name" required />
                    <span class="form-text text-muted">Please enter your Category name</span>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-12 py-1">
                    <label>Kategori:</label>
                    <select class="form-control selectpicker" name="category_id">
                        @foreach($cdocuments as $cdocument)
                        <option value="{{ $cdocument->id }}">{{ $cdocument->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <input type="hidden" name="image_file" id="image_base64" />
                
                <label for="exampleColorInput" class="form-label">input file PDf Max 1mb</label>
                <input class="form-control" type="file" id="formFileMultiple" required>
              </div>
            
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{ route('cms.document.index') }}" type="reset" class="btn btn-secondary">Cancel</a>
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
    document.querySelector("#formFileMultiple").addEventListener("click", function (e) {
        $("#image_base64").val("");
    });

    document.querySelector("#formFileMultiple").onchange = async (e) => {
        if (e.target.files[0] != null) {
            var filename = e.target.files[0].name;
            /* getting file extenstion eg- .jpg,.png, etc */
            var extension = filename.substr(filename.lastIndexOf("."));
            var allowedExtensionsRegx = /(\.pdf)$/i;
            var isAllowed = allowedExtensionsRegx.test(extension);

            const fsize = e.target.files[0].size;
            const file = Math.round((fsize / 1024));

            if (isAllowed) {
                if (file <= 1096) {
                    let b64Data = await getBase64(e.target.files[0]);
                    $("#image_base64").val(b64Data);
                } else {
                    e.target.value = '';
                    console.log("Max file size is 1 MB");
                    return false;
                }
            } else {
                e.target.value = '';
                console.log("Please upload PDF file");
                return false;
            }
        } else {
            return false;
        }
    }

</script>
@endpush