@extends('guest-layout')

@section('header-nav')
<div class="headerNav">
    <ul>
        <li><a href="http://www.braunbuffel.com.au/women-new-arrivals-fc-1035_1216.html">Terbaru</a></li>
        <li><a href="http://www.braunbuffel.com.au/women-customer-favourites-fc-1035_1274.html">Favorit</a></li>
        <li><a href="http://www.braunbuffel.com.au/feature.php?ftr=10001">Hadiah</a></li><li><a class="menu" href="http://www.braunbuffel.com.au/women-handbags-fc-1035_1043.html">Tas Wanita</a></li>
        <li><a href="http://www.braunbuffel.com.au/women-wallets-fc-1035_1045.html">Dompet</a></li>
        <li><a href="http://www.braunbuffel.com.au/women-accessories-fc-1035_1047.html">Aksesoris</a></li>
        <li><a href="http://www.braunbuffel.com.au/sale-women-accessories-iphoneipad-cases-fc-1035_1047_1073.html">Pelindung iPhone/iPad</a></li>
        <li><a href="http://www.braunbuffel.com.au/women-travel-fc-1035_1048.html">Travel</a></li>
    </ul>
</div>
@endsection

@section('content')
<div class="bodyContainer">
    <div class="bodyContainerWrapper">
    </div>
    <div class="bodyContainerWrapper">
        <div class="contentTop">
        </div>
        <div class="contentMain">
            <div class="sliderContent">
                <div id="slider" style="width: 755px; height: 460px; overflow: hidden;">
                    <ul style="width: 3775px;">
                        <li style="margin-left: -755px; float: left;">
                            <img border="0" src="assets/img/hp_14_11_07_westfieldsydney2.jpg" width="755">
                        </li>
                        <li style="float: left;">
                            <img border="0" src="assets/img/hp_14_12_09_campaign.jpg" width="755">
                            <div class="home_banner_text" style="right:410px;bottom:260px;width:260px;">
                                <h3 class="white">Featuring</h3>
                                <h2 class="white">The Dynamic Duet</h2>
                                <div style="position:absolute;left:0;margin-top:10px;">
                                    <a href="http://www.braunbuffel.com.au/women-new-arrivals-fc-1035_1216.html">
                                        <span class="buttons"><button type="submit" class="transwhite  "><span class="ui-text">Wanita</span></button></span>
                                    </a>
                                </div>
                                <div style="position:absolute;right:0;margin-top:10px;">
                                    <a href="http://www.braunbuffel.com.au/men-new-arrivals-fc-1036_1216.html">
                                        <span class="buttons"><button type="submit" class="transwhite  "><span class="ui-text">Pria</span></button></span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
<!--                            BUG-->
            <div style="background-color:none;width:100%;margin-top: 16px;">
                <div class="home_listing_item" style="margin-left:0px;">
                    <a href="http://www.braunbuffel.com.au/women-handbags-fc-1035_1043.html#vang">
                    <div class="home_listing_item_content">
                        <img border="0" src="assets/img/hp_women_handbags_vang.jpg">
                        <div class="overlay"></div>
                        <div class="home_listing_item_text_hover">                    
                        <div class="home_listing_item_text">
                            <h2 class="white">Vang Handbags</h2>
                            <h3 class="white">Soft, nappa leather with pleated detail.</h3>
                            <span class="buttons"><button type="submit" class="transwhite medium "><span class="ui-text">Shop Vang</span></button></span>                    </div>
                        </div>
                    </div>
                    </a>
                </div>
            <!-- row end -->

            <!-- row start -->
                <div class="home_listing_item" style="">
                    <a href="http://www.braunbuffel.com.au/women-handbags-fc-1035_1043.html#pebble">
                    <div class="home_listing_item_content">
                        <img border="0" src="assets/img/hp_women_handbags_pebble.jpg">
                        <div class="overlay"></div>
                        <div class="home_listing_item_text_hover">                    
                        <div class="home_listing_item_text">
                            <h2 class="white">Pebble Handbags</h2>
                            <h3 class="white">Embossed soft leather trimmed with patent leather with silver tone hardware.</h3>
                            <span class="buttons"><button type="submit" class="transwhite medium "><span class="ui-text">Shop Pebble</span></button></span>                    </div>
                        </div>    
                    </div>
                    </a>

                </div>
                <div class="home_listing_item" style="margin-right:0px;">
                    <a href="http://www.braunbuffel.com.au/women-wallets-fc-1035_1045.html#pebble">
                    <div class="home_listing_item_content">
                        <img border="0" src="assets/img/hp_women_wallets_pebble.jpg">
                        <div class="overlay"></div>
                        <div class="home_listing_item_text_hover">                    
                        <div class="home_listing_item_text">
                            <h2 class="white">Pebble Wallets</h2>
                            <h3 class="white">Embossed soft leather trimmed with patent leather with silver tone hardware.</h3>
                            <span class="buttons"><button type="submit" class="transwhite medium "><span class="ui-text">Shop Pebble</span></button></span>                    </div>
                        </div>    
                    </div>
                    </a>
                </div>
                <div class="cssclear"></div>
            </div>
            <div class="clearer"></div>
        </div>
        <div class="contentBottom"></div>
    </div>
    <div class="clearer"></div>
</div>
@endsection