<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0053)http://www.braunbuffel.com.au/?locale=US&currency=USD -->
<html>
    <head>
        <title>Braun Buffel | Handbags &amp; Accessories | Home</title>
        <!--<base href="http://www.braunbuffel.com.au/">--><base href=".">
        <meta name="description" content="Bajustore is a premium German designer and producer of top quality leather goods and accessories, offering shoes, handbags, purses, travel and business cases for both men and women.">
        <meta name="keywords" content="handbags, wallets, purses, bags, leather">
        <meta property="og:description" content="Bajustore is a premium German designer and producer of top quality leather goods and accessories, offering shoes, handbags, purses, travel and business cases for both men and women.">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets-guest/css/stylesheet.css') }}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets-guest/css/print.css') }}" media="print">
        <script type="text/javascript" async="" src="{{ URL::asset('assets-guest/js/pinit_main.js') }}"></script>
        <script id="facebook-jssdk" src="{{ URL::asset('assets-guest/js/all.js') }}"></script>
        <script type="text/javascript" async="" src="{{ URL::asset('assets-guest/js/ga.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('assets-guest/js/prototype.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('assets-guest/js/scriptaculous.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('assets-guest/js/effects.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('assets-guest/js/modalbox.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('assets-guest/js/common.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets-guest/css/modalbox.css') }}" media="screen">
        <script type="text/javascript" src="{{ URL::asset('assets-guest/js/jquery.min.js') }}"></script>
        <script>jQuery.noConflict();</script>
        <script src="{{ URL::asset('assets-guest/js/popup_window.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets-guest/js/newsletter_box_check.js') }}" type="text/javascript"></script>
        <link href="{{ URL::asset('assets-guest/css/css') }}" rel="stylesheet" type="text/css">
        
        <script src="{{ URL::asset('assets-guest/js/easySlider1.7.7.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets-guest/js/jquery.colorbox-min.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets-guest/css/colorbox.css') }}" media="screen">
        <script src="{{ URL::asset('assets-guest/js/jquery.ipicture.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets-guest/css/iPicture.css') }}" media="screen">
    </head>
    <body class="colorSchemeLight">
        <script type="text/javascript">
            (function($) { // Hide scope, no $ conflict
            function tick(){
                $('#ticker li:first').animate({'opacity':0}, 200, function () { $(this).appendTo($('#ticker')).css('opacity', 1); });
            }
            setInterval(function(){ tick () }, 4000);

            function tick2(){
                $('#ticker2 li:first').animate({'opacity':0}, 200, function () { $(this).appendTo($('#ticker2')).css('opacity', 1); });
            }
            setInterval(function(){ tick2 () }, 4000);

            })(jQuery);
        </script>
        <div class="wrapper">
            <div class="mainContainer">
                <div class="headerContainer">
                    <div class="headerLogo">
                        <a class="logo" href="http://www.braunbuffel.com.au/" title="Braun Buffel Australia">&nbsp;</a>
                    </div>
                    @yield('header-nav')
                    <div class="headerAccount">
                        <ul>
                            <li><a href="http://www.braunbuffel.com.au/feature.php?ftr=10001">Wanita</a></li>
                            <li><a href="http://www.braunbuffel.com.au/feature.php?ftr=10002">Pria</a></li>
                            <li><a href="http://www.braunbuffel.com.au/about-braun-buffel-i-8.html">Tentang Kita</a></li>
                            <div class="clearer"></div>
                        </ul>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
        <div class="bottomBar">
            <div class="footerContainer">
                <div class="footerNav">
                    <ul class="menuList1">
                        <li><a href="http://www.braunbuffel.com.au/customer-service-i-1.html">Customer Service</a>
                            <ul class="menuList2">
                                <li><a href="http://www.braunbuffel.com.au/return-policy-i-1_6.html">Pengembalian</a></li>
                                <li><a href="http://www.braunbuffel.com.au/privacy-policy-i-1_7.html">Kebijakan Privasi</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="footerStore">
                    <div class="footerSocialLabel">Kunjungi kami di Bajustore</div>
                    <p>Jalan Ir. H. Djuanda no. 113<br>
                        Bandung, 40135<br>
                        Tel: +62 838 2110 2216 (Andes Sagita)</p>
                </div>
                <div class="clearer"></div>
                <div class="footerText">Copyright © 2015 Bajustore. All Rights Reserved.</div>
            </div>
            <script>
                (function($) {
                    $(".cssproduct_listing_item_image img")
                        .mouseover(function() {
                            var src = $(this).siblings(".thumbnailhover").text();
                            $(this).attr("src", src);
                        })
                        .mouseout(function() {
                            var src = $(this).siblings(".thumbnailorig").text();
                            $(this).attr("src", src);
                        })
                        ;
                    $("a.mumsday13").colorbox({opacity:0.65,iframe:true,innerWidth:650,innerHeight:500});

                    $("a.holidayTradingHours").colorbox({opacity:0.65,iframe:true,innerWidth:480,innerHeight:500});
                //    $("a.holidayShipping").colorbox({opacity:0.65,iframe:true,innerWidth:480,innerHeight:500});
                //    $("a.holidayPromo").colorbox({opacity:0.65,iframe:true,innerWidth:480,innerHeight:500});
                    $("a.Shipping").colorbox({opacity:0.65,iframe:true,innerWidth:480,innerHeight:500});
                    $("a.promoBanner").colorbox({opacity:0.65,iframe:true,innerWidth:480,innerHeight:500});

                })(jQuery);
            </script>
        </div>
        <div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" style="display: none; padding-bottom: 32px; padding-right: 0px;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxLoadedContent" style="width: 0px; height: 0px; overflow: hidden; float: left;"></div><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><div id="cboxNext" style="float: left;"></div><div id="cboxPrevious" style="float: left;"></div><div id="cboxSlideshow" style="float: left;"></div><div id="cboxClose" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div>
    </body>
</html>