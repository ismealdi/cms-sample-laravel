@extends('layouts.app')
@section('title', 'Create layanan')
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
    <form class="form" action="{{ route('cms.layanan.store') }}" method="POST">
        @csrf

        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-6">
                    <label>Name:</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter berita Name" required />
                    <span class="form-text text-muted">Please enter your layanan name</span>
                </div>
                <div class="col-lg-6">
                    <label>Kategori:</label>
                    <select class="form-control selectpicker" name="clayanan_id">
                        @foreach($clayanans as $clayanan)
                        <option value="{{ $clayanan->id }}">{{ $clayanan->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12">
                    <label>Konten:</label>
                    <textarea id="open-source-plugins" name="content" class="tox-target"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <input type="hidden" name="image_file" id="image_base64" />
                <div class="col-lg-12">
                    <label>Banner</label><br />
                    <div class="image-input w-100" id="image_file">
                        <div class="image-input-wrapper"
                            style="background-color: whitesmoke !important; min-width: 100%;height: 240px;object-position: center;">
                        </div>
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                            data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input type="file" name="profile_avatar" id="profile_avatar" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="profile_avatar_remove" id="profile_remove" />
                        </label>

                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                            id="image_remove" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="{{ route('cms.layanan.index') }}" type="reset" class="btn btn-secondary">Cancel</a>
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
    var KTBootstrapSelect = function () {

        // Private functions
        var demos = function () {
            // minimum setup
            $('.kt-selectpicker').selectpicker();
        }

        return {
            // public functions
            init: function () {
                demos();
            }
        };
    }();

    var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    tinymce.init({
        selector: 'textarea#open-source-plugins',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        link_list: [
            { title: 'My page 1', value: 'https://www.tiny.cloud' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_list: [
            { title: 'My page 1', value: 'https://www.tiny.cloud' },
            { title: 'My page 2', value: 'http://www.moxiecode.com' }
        ],
        image_class_list: [
            { title: 'None', value: '' },
            { title: 'Some class', value: 'class-name' }
        ],
        importcss_append: true,
        file_picker_callback: function (callback, value, meta) {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
            }

            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
            }

            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
            }
        },
        templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
            { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
            { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image imagetools table',
        skin: useDarkMode ? 'oxide-dark' : 'oxide',
        content_css: useDarkMode ? 'dark' : 'default',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });

    var avatar2 = new KTImageInput('image_file');

    document.querySelector("#image_remove").addEventListener("click", function (e) {
        $("#image_base64").val("");
    });

    document.querySelector("#profile_avatar").onchange = async (e) => {
        if (e.target.files[0] != null) {
            var filename = e.target.files[0].name;
            /* getting file extenstion eg- .jpg,.png, etc */
            var extension = filename.substr(filename.lastIndexOf("."));
            var allowedExtensionsRegx = /(\.jpg|\.jpeg|\.png)$/i;
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
                console.log("Please upload Image file");
                return false;
            }
        } else {
            return false;
        }
    }

    jQuery(document).ready(function () {
        KTBootstrapSelect.init();
    });

    

</script>
@endpush