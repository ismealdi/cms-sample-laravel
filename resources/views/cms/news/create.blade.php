@extends('layouts.app')
@section('title', 'Create news')
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
    <form class="form" action="{{ route('cms.news.store') }}" method="POST">
        @csrf

        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-12">
                    <label>Name:</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter berita Name" required />
                    <span class="form-text text-muted">Please enter your news name</span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12">
                    <label>Konten:</label>
                    <input type="hidden" name="content" class="form-control" placeholder="Enter berita " id="content" />
                    
                    <div id="kt_quil_2" style="height: 325px">
                        
                    </div>
                </div>
            </div>
            
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{ route('cms.news.index') }}" type="reset" class="btn btn-secondary">Cancel</a>
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
// Class definition
var KTQuilDemos = function() {

// Private functions
var demo2 = function() {
    var Delta = Quill.import('delta');
    var quill = new Quill('#kt_quil_2', {
        modules: {
            toolbar: true
        },
        placeholder: 'Type your text here...',
        theme: 'snow'
    });

    // Store accumulated changes
    var change = new Delta();
    quill.on('text-change', function(delta) {
        change = change.compose(delta);
    });

    // Save periodically
    setInterval(function() {
        if (change.length() > 0) {
            console.log('Saving changes', change);
            $("#content").val(JSON.stringify(quill.getContents()));
            
            change = new Delta();
        }
    }, 5 * 1);

    //quill.setContents($("#content").val());

    // Check for unsaved data
    window.onbeforeunload = function() {
        if (change.length() > 0) {
            return 'There are unsaved changes. Are you sure you want to leave?';
        }
    }
}

return {
    // public functions
    init: function() {
        demo2();
    }
};
}();

jQuery(document).ready(function() {
KTQuilDemos.init();
});
</script>
@endpush