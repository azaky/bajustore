@extends('guest-layout')

@section('header-nav')
    <div class="headerNav">
        <ul>
            <li><a href="http://www.braunbuffel.com.au/women-new-arrivals-fc-1035_1216.html">Terbaru</a></li>
            <li><a href="http://www.braunbuffel.com.au/women-customer-favourites-fc-1035_1274.html">Favorit</a></li>
            <li><a href="http://www.braunbuffel.com.au/feature.php?ftr=10001">Hadiah</a></li>
            <li><a class="menu" href="http://www.braunbuffel.com.au/women-handbags-fc-1035_1043.html">Tas Wanita</a>
            </li>
            <li><a href="http://www.braunbuffel.com.au/women-wallets-fc-1035_1045.html">Dompet</a></li>
            <li><a href="http://www.braunbuffel.com.au/women-accessories-fc-1035_1047.html">Aksesoris</a></li>
            <li><a href="http://www.braunbuffel.com.au/sale-women-accessories-iphoneipad-cases-fc-1035_1047_1073.html">Pelindung
                    iPhone/iPad</a></li>
            <li><a href="http://www.braunbuffel.com.au/women-travel-fc-1035_1048.html">Travel</a></li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="bodyContainer">
        <div class="bodyContainerWrapper">
        </div>
        <div class="contentContainer">
            <div class="contentBreadcrumbs">
                <div style="float:left"><a href="http://www.braunbuffel.com.au/" class="headerNavigation">Home</a>
                    &nbsp;/&nbsp; <a href="http://www.braunbuffel.com.au/women-fc-1035.html" class="headerNavigation">Wanita</a>
                    &nbsp;/&nbsp; <a href="http://www.braunbuffel.com.au/women-handbags-fc-1035_1043.html"
                                     class="headerNavigation">Tas Wanita</a> &nbsp;/&nbsp; <a
                            href="http://www.braunbuffel.com.au/women-handbags-fc-1035_1043.html?fPath=1053"
                            class="headerNavigation">Cross-Body</a> &nbsp;/&nbsp; <a
                            href="http://www.braunbuffel.com.au/flapy-sling-bag-p-13256.html?cPath=1035_1043"
                            class="headerNavigation">Flapy Sling Bag</a></div>
            </div>
            <div class="contentMain">
                <form name="buy_now_" id="buy_now_"
                      action="http://www.braunbuffel.com.au/flapy-sling-bag-p-13256.html?action=add_product&fPath=105&cPath=1035_1043"
                      method="post">
                    <div class="ProductInfoContainer">

                        <div class="ProductInfoContainerLeft ProductInfoContainerLeftImage">
                            <script>
                                (function ($) {
                                    $('.mousetrap').live('click', function () {
                                        $('#zoom1').click();
                                    });
                                })(jQuery);
                            </script>
                            <div id="wrap" style="top:0px; position:relative;"><a id="zoom1" class="thickbox cloud-zoom cboxElement"
                                                                                  href="http://www.braunbuffel.com.au/images/col_flapy/flapy28bir.jpg"
                                                                                  rel="adjustX: 0, adjustY:-1"
                                                                                  style="position: relative; display: block;">
                                    <img src="assets/img/col_flapy-flapy28bir_455x455.jpg" border="0"
                                         alt="Flapy Sling Bag" title=" Flapy Sling Bag " width="455" height="455"
                                         style="display: block;">

                                    <div class="cloud-zoom-lens"
                                         style="z-index: 98; position: absolute; width: 136.5px; height: 207.025px; opacity: 0.486265768794951; left: 0px; top: 149px; background-position: 0px -149px;"></div>
                                </a>

                                <div class="mousetrap"
                                     style="z-index: 999; position: absolute; width: 455px; height: 455px; left: 0px; top: 0px; cursor: move; background: url(http://www.braunbuffel.com.au/images/pixel_white.gif) no-repeat;"></div>
                            </div>
                        </div>
                        <div class="ProductInfoContainerNextPrevious">


                            <table border="0" align="right" cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td align="right" class="main"><a
                                                href="http://www.braunbuffel.com.au/flapy-sling-bag-p-13255.html?cPath=1035_1043&fPath=1053">sebelumnya</a>&nbsp;
                                    </td>
                                    <td>|</td>
                                    <!--    <td align="center" class="main" valign="top">Product&nbsp;15&nbsp;PREV_NEXT_OF&nbsp;15&nbsp;PREV_NEXT_CAT&nbsp;Handbags</td> -->
                                    <td align="left" class="main"></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="ProductInfoContainerRight">
                            <div class="prodName">{{ $product->name or 'Product Name' }}</div>
                            {{--<div class="prodModel">--}}
                            {{--<div class="prodLabel">Tipe:</div>--}}
                            {{--<div class="prodValue"><b>FLAPY-28-BIR</b></div>--}}
                            {{--</div>--}}
                            {{--<div class="clearer"></div>--}}

                            {{--<div class="prodColor">--}}
                            {{--<div class="prodLabel">Warna:</div>--}}
                            {{--<div class="prodValue"><b>BIRCH GREEN</b>--}}
                            {{--<br>&nbsp;<a--}}
                            {{--href="http://www.braunbuffel.com.au/flapy-sling-bag-p-13254.html?fPath=1053&cPath=1035_1043"><img--}}
                            {{--src="assets/img/col_flapy-swatch_flapy_mou_28x30.jpg" border="0"--}}
                            {{--alt="MOUSSE GREY" title=" MOUSSE GREY " width="28" height="30"--}}
                            {{--style="border: 0px solid #333333; padding:2px;"></a>&nbsp;&nbsp;<a--}}
                            {{--href="http://www.braunbuffel.com.au/flapy-sling-bag-p-13255.html?fPath=1053&cPath=1035_1043"><img--}}
                            {{--src="assets/img/col_flapy-swatch_flapy_mng_28x30.jpg" border="0"--}}
                            {{--alt="MANGO ORANGE" title=" MANGO ORANGE " width="28" height="30"--}}
                            {{--style="border: 0px solid #333333; padding:2px;"></a>&nbsp;&nbsp;<a--}}
                            {{--href="assets/img/Braun Buffel   Flapy Sling Bag.html"><img--}}
                            {{--src="assets/img/col_flapy-swatch_flapy_bir_28x30.jpg" border="0"--}}
                            {{--alt="BIRCH GREEN" title=" BIRCH GREEN " width="28" height="30"--}}
                            {{--style="border: 1px solid #333333; padding:1px;"></a>&nbsp;<br>* Actual--}}
                            {{--colour may vary.--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="clearer"></div>

                            <div class="prodDescription">
                                {{ $product->description or 'Product Description' }}
                            </div>

                        </div>
                        <!-- ProductInfoContainerRight -->
                    </div>
                </form>
                <!-- ProductInfoContainer -->

                <div class="contentContainerBreadcrumbs"></div>
                <table class="infoBoxContents" width="100%" align="left">
                    <tbody>
                    <tr>
                        <td><img src="assets/img/also_available.gif" border="0" alt=""></td>
                    </tr>
                    </tbody>
                </table>
                <div class="cssproduct_listing_item_3col cssproduct_listing_item_3col_extended">
                    <div class="cssproduct_listing_item_image cssproduct_listing_content"><a
                                href="http://www.braunbuffel.com.au/jube-shoulder-sling-bag-p-12791.html?fPath=1053&cPath=1035_1043"><img
                                    src="assets/img/col_jube-jube46blk_240x240.jpg" border="0"
                                    alt="Jube Shoulder / Sling Bag" title=" Jube Shoulder / Sling Bag " width="240"
                                    height="240"><span class="thumbnailhover" style="display:none;">assets/img/col_jube-jube46blk_240x240.jpg</span><span
                                    class="thumbnailorig" style="display:none;">assets/img/col_jube-jube46blk_240x240.jpg</span></a>
                    </div>
                    <div class="cssproduct_listing_content"><a
                                href="http://www.braunbuffel.com.au/jube-shoulder-sling-bag-p-12791.html?fPath=1053&cPath=1035_1043"
                                class="list">Jube Shoulder / Sling Bag</a></div>
                    <div class="cssproduct_listing_content"><span class="productPrice">A$395.00</span><span
                                class="productPriceLocal">(Approx. US$301.86)</span></div>
                    <div class="cssproduct_listing_content">&nbsp;<b>more colours available</b></div>
                </div>
                <div class="cssproduct_listing_item_3col cssproduct_listing_item_3col_extended">
                    <div class="cssproduct_listing_item_image cssproduct_listing_content"><a
                                href="http://www.braunbuffel.com.au/flapy-long-wallet-with-sling-p-13251.html?fPath=1053&cPath=1035_1043"><img
                                    src="assets/img/col_flapy-flapy501mng_240x240.jpg" border="0"
                                    alt="Flapy Long Wallet With Sling" title=" Flapy Long Wallet With Sling "
                                    width="240" height="240"><span class="thumbnailhover" style="display:none;">assets/img/col_flapy-flapy501mng_240x240.jpg</span><span
                                    class="thumbnailorig" style="display:none;">assets/img/col_flapy-flapy501mng_240x240.jpg</span></a>
                    </div>
                    <div class="cssproduct_listing_content"><a
                                href="http://www.braunbuffel.com.au/flapy-long-wallet-with-sling-p-13251.html?fPath=1053&cPath=1035_1043"
                                class="list">Flapy Long Wallet With Sling</a></div>
                    <div class="cssproduct_listing_content"><span class="productPrice">A$329.00</span><span
                                class="productPriceLocal">(Approx. US$251.42)</span></div>
                    <div class="cssproduct_listing_content">&nbsp;<b>more colours available</b></div>
                </div>
                <div class="cssproduct_listing_item_3col cssproduct_listing_item_3col_extended">
                    <div class="cssproduct_listing_item_image cssproduct_listing_content"><a
                                href="http://www.braunbuffel.com.au/kaiserin-sling-bag-p-13094.html?fPath=1053&cPath=1035_1043"><img
                                    src="assets/img/col_kaiserin-kaiserin04so_240x240.jpg" border="0"
                                    alt="Kaiserin Sling Bag" title=" Kaiserin Sling Bag " width="240" height="240"><span
                                    class="thumbnailhover" style="display:none;">assets/img/col_kaiserin-kaiserin04so_240x240.jpg</span><span
                                    class="thumbnailorig" style="display:none;">http://assets3.braunbuffel.com.au/thumbnails/col_kaiserin-kaiserin04so_240x240.jpg</span></a>
                    </div>
                    <div class="cssproduct_listing_content"><a
                                href="http://www.braunbuffel.com.au/kaiserin-sling-bag-p-13094.html?fPath=1053&cPath=1035_1043"
                                class="list">Kaiserin Sling Bag</a></div>
                    <div class="cssproduct_listing_content"><span class="productPrice">A$375.00</span><span
                                class="productPriceLocal">(Approx. US$286.57)</span></div>
                    <div class="cssproduct_listing_content">&nbsp;<b>more colours available</b></div>
                </div>
                <div class="cssclear"></div>
            </div>
            <div class="contentBottom">
            </div>
        </div>
        <div class="clearer"></div>
    </div>
@endsection
