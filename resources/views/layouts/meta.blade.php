<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title') | EcuTravel</title>

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/base/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/feather/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flag-icon-css/css/flag-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}">

    <script src="{{ asset('vendors/js/jquery/jquery.min.js') }}"></script>

    @yield('page-styles')
</head>
<body class="pace-done vertical-layout vertical-menu-modern @yield('body-class')">
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
            </div>
        </div>
    </div>

    @yield('post-meta')

    <script src="{{ asset('js/scripts/ui/ui-feather.js') }}"></script>

    <script src="{{ asset('vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}"></script>


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
        });
    </script>
</body>
</html>
