<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Emporium') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('ace-master/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('ace-master/assets/css/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('emporium/assets/css/emporium.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ asset('ace-master/assets/css/ace-part2.min.css') }}" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('ace-master/assets/css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('ace-master/assets/css/ace-rtl.min.css') }}" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ asset('ace-master/assets/css/ace-ie.min.css') }}" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- emporium personal styles -->
    <link rel="stylesheet" href="{{ asset('emporium/assets/css/emporium-theme.css') }}" />

    <!-- ace settings handler -->
    <script src="{{ asset('ace-master/assets/js/ace-extra.min.js') }}"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="{{ asset('ace-master/assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('ace-master/assets/js/respond.min.js') }}"></script>
    <![endif]-->

</head>

<body class="no-skin">

@if(!Auth::check())
    {{--Aqui temos o topo do layout especifico para tela de login--}}
    @include('layouts.emporium.top_navbar_login')
    <br>
    {{--Exibindo conteudo --}}
    @yield('content')
@else
    {{--Aqui temos o topo do layout com navbar/logotipo/notificacoes/menu de usuario--}}
    @include('layouts.emporium.top_navbar')

    {{--Aqui temos o layout dinamico do menu lateral e conteudo--}}
    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try{ace.settings.loadState('main-container')}catch(e){}
        </script>

        {{--Exibindo menu superior dos modulos--}}
        @include('layouts.emporium.top_menu')


        {{--Exibindo conteudo dinamico - menu lateral+conteudo--}}
        @include('layouts.emporium.main')
        {{--@yield('content')--}}

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->
@endif

<!-- basic javascripts -->

<!--[if !IE]> -->
<script src="{{ asset('ace-master/assets/js/jquery-2.1.4.min.js') }}"></script>
<!-- <![endif]-->

<!--[if IE]>
<script src="{{ asset('ace-master/assets/js/jquery-1.11.3.min.js') }}"></script>
<![endif]-->

<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='ace-master/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<script src="{{ asset('ace-master/assets/js/bootstrap.min.js') }}"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="{{ asset('ace-master/assets/js/ace-elements.min.js') }}"></script>
<script src="{{ asset('ace-master/assets/js/ace.min.js') }}"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $('#sidebar2').insertBefore('.page-content');
        $('#navbar').addClass('h-navbar');
        $('.footer').insertAfter('.page-content');

        $('.page-content').addClass('main-content');

        $('.menu-toggler[data-target="#sidebar2"]').insertBefore('.navbar-brand');


        $(document).on('settings.ace.two_menu', function(e, event_name, event_val) {
            if(event_name == 'sidebar_fixed') {
                if( $('#sidebar').hasClass('sidebar-fixed') ) $('#sidebar2').addClass('sidebar-fixed')
                else $('#sidebar2').removeClass('sidebar-fixed')
            }
        }).triggerHandler('settings.ace.two_menu', ['sidebar_fixed' ,$('#sidebar').hasClass('sidebar-fixed')]);

        $('#sidebar2[data-sidebar-hover=true]').ace_sidebar_hover('reset');
        $('#sidebar2[data-sidebar-scroll=true]').ace_sidebar_scroll('reset', true);
    })
</script>
</body>
</html>