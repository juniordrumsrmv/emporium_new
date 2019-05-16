<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Emporium') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css" />


    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="ace-master/assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="ace-master/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="ace-master/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="ace-master/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="ace-master/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="ace-master/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- emporium personal styles -->
    <link rel="stylesheet" href="emporium/assets/css/emporium-theme.css" />

    <!-- ace settings handler -->
    <script src="ace-master/assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="ace-master/assets/js/html5shiv.min.js"></script>
    <script src="ace-master/assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div id="app">

        @php
            if (Auth::check()){
                //MONTANDO MENUS EMPORIUM
                $navbar = Navbar::class;
            }
            else {
                //TOPO DA PAGINA DE LOGIN
                $navbar = "<nav class='emporium-navbar navbar navbar-default navbar-static-top'>
                    <div class='container'>
                        <div class='navbar-header'>

                            //Logo Emporium
                            <a class='navbar-brand' href='{{ url('/') }}'>
                                <img src='img/logo-login.jpg' class='emporium-logo-login' align='center' border='0'>
                            </a>

                        </div>
                    </div>
                </nav>";
            }
        @endphp
        {!! $navbar !!}

        <br>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('ace-master/js/app.js') }}"></script>

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="ace-master/assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
    <script src="ace-master/assets/js/jquery-1.11.3.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='ace-master/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->

    <!-- ace scripts -->
    <script src="ace-master/assets/js/ace-elements.min.js"></script>
    <script src="ace-master/assets/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            $('#sidebar2').insertBefore('.page-content');

            $('.navbar-toggle[data-target="#sidebar2"]').insertAfter('#menu-toggler');


            $(document).on('settings.ace.two_menu', function(e, event_name, event_val) {
                if(event_name == 'sidebar_fixed') {
                    if( $('#sidebar').hasClass('sidebar-fixed') ) {
                        $('#sidebar2').addClass('sidebar-fixed');
                        $('#navbar').addClass('h-navbar');
                    }
                    else {
                        $('#sidebar2').removeClass('sidebar-fixed')
                        $('#navbar').removeClass('h-navbar');
                    }
                }
            }).triggerHandler('settings.ace.two_menu', ['sidebar_fixed' ,$('#sidebar').hasClass('sidebar-fixed')]);
        })
    </script>
</body>
</html>
