<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title') | EcuTravel</title>
    <link rel="apple-touch-icon" href="{{asset('images/ico/favicon-32x32.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/ico/favicon.ico')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/toastr.min.css')}}">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/base/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}">

    <link rel="stylesheet" href="{{ asset('css/base/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/feather/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flag-icon-css/css/flag-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/base/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/base/plugins/extensions/ext-component-sweet-alerts.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/base/pages/app-invoice-list.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/base/plugins/charts/chart-apex.css') }}">


                                {{--FILE UPLOADER--}}
    <link rel="stylesheet" href="{{ asset('css/base/plugins/forms/form-file-uploader.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">





    <link rel="stylesheet" href="{{ asset('css/base/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/plugins/forms/pickers/form-pickadate.css') }}">

    <script src="{{ asset('vendors/js/jquery/jquery.min.js') }}"></script>

    @yield('page-styles')
</head>
<body class="pace-done vertical-layout vertical-menu-modern @yield('body-class')" data-open="click" data-menu="vertical-menu-modern" data-col="">
    <style>
        div {
            overflow-x: visible !important;
        }
    </style>

    @if(isset($pageData) && $pageData['header'] != false)
        @include('layouts.header')
    @endif

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper @if(isset($pageData) && $pageData['header'] != false) container-xxl p-0 @endif">
            <div class="content-header row">
            </div>
            <div class="content-body">
                @yield('content')
                <div class="sidenav-overlay"></div>
                <div class="drag-target"></div>
            </div>
        </div>
    </div>

    @yield('post-meta')
    <script src="{{ asset('js/scripts/ui/ui-feather.js') }}"></script>

    <script src="{{ asset('vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{asset('vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{asset('js/scripts/extensions/ext-component-clipboard.js')}}"></script>
    <script src="{{asset('js/scripts/pages/page-account-settings-account.js')}}"></script>


    <script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('vendors/js/extensions/moment.min.js')}}"></script>


    <script src="{{asset('js/scripts/pages/dashboard-analytics.js')}}"></script>
    <script src="{{asset('js/scripts/cards/card-analytics.js')}}"></script>

                            {{--ДАТА И ВРЕМЯ--}}
    <script src="{{asset('js/scripts/forms/pickers/form-pickers.js')}}"></script>



{{--    <script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>--}}
    <script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
    <script src="{{asset('vendors/js/pickers/pickadate/picker.time.js')}}"></script>
{{--    <script src="{{asset('vendors/js/pickers/pickadate/legacy.js')}}"></script>--}}
{{--    <script src="{{asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>--}}


    <script src="{{asset('js/scripts/pages/app-invoice-list.js')}}"></script>

                            {{--FILE UPLOADER--}}
    <script src="{{asset('js/scripts/forms/form-file-uploader.js')}}"></script>
    <script src="{{asset('vendors/js/file-uploaders/dropzone.min.js')}}"></script>



    <script src="{{ asset('js/core/app-menu.js') }}"></script>
    <script src="{{ asset('js/core/app.js') }}"></script>

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }

            $('body').removeClass('menu-collapsed');

            /** Выделение ссылки */
            let navItems = $(".navigation-main li");

            $.each(navItems, function (index, value) {
                let link = $(value).find('a');
                if (window.location.href === link.attr('href')) {
                    $(value).addClass('active');
                }
            });
        });

        /** ИСЧЕЗНОВЕНИЕ ВАЛИДАЦИИ **/
        $(function (){
            $('.invalid-feedback').fadeOut(3000);
        });
    </script>
</body>
</html>
