<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CMS RSPG') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
    <link href='{{ url("assets/css/login.css") }}' rel="stylesheet" type="text/css" />

    <link href='{{ url("assets/plugins/global/plugins.bundle.css") }}' rel="stylesheet" type="text/css" />
    <link href='{{ url("assets/plugins/custom/prismjs/prismjs.bundle.css") }}' rel="stylesheet" type="text/css" />
    <link href='{{ url("assets/css/style.bundle.css") }}' rel="stylesheet" type="text/css" />

</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
                style="background-image: url('{{ url('assets/medias/bg-login.jpg') }}');">
                <div class="login-form text-center p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="{{ url('assets/medias/logo.png') }}" class="max-h-75px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->

                    @yield('content')
                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>

    <!-- END -->
</body>

<script src='{{ url("assets/plugins/global/plugins.bundle.js") }}'></script>
<script src='{{ url("assets/plugins/custom/prismjs/prismjs.bundle.js") }}'></script>
<script src='{{ url("assets/js/scripts.bundle.js") }}'></script>
<script src='{{ url("assets/js/login.js") }}'></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

</html>