<!DOCTYPE HTML>
<!--
    Astral by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Astral by HTML5 UP</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="{{ URL::asset('assets-admin/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets-admin/js/skel.min.js') }}"></script>
        <script src="{{ URL::asset('assets-admin/js/init.js') }}"></script>
        <noscript>
            <link rel="stylesheet" href="{{ URL::asset('assets-admin/css/skel.css') }}" />
            <link rel="stylesheet" href="{{ URL::asset('assets-admin/css/style.css') }}" />
            <link rel="stylesheet" href="{{ URL::asset('assets-admin/css/style-desktop.css') }}" />
            <link rel="stylesheet" href="{{ URL::asset('assets-admin/css/style-noscript.css') }}" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    </head>
    <body>
        <!-- Wrapper-->
            <div id="wrapper">
                @yield('content')

                <!-- Footer -->
                    <div id="footer">
                        <ul class="copyright">
                            <li>&copy; Bajustore.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </div>
            </div>
    </body>
</html>