@extends('guest-layout')

@section('content')
    <div class="bodyContainer">
        <div class="bodyContainerWrapper">
        </div>
        <div class="contentContainer">
            <div class="contentBreadcrumbs">
                <div style="float:left">
                    <a href="{{ url('/') }}" class="headerNavigation">Home</a>
                    @foreach ($breadcrumb as $page)
                        &nbsp;/&nbsp; <a href="{{ url('collections/' . $page->id) }}"
                                         class="headerNavigation">{{ $page->name }}</a>
                    @endforeach
                    &nbsp;/&nbsp; <a href="{{ url('item/' . $product->id) }}"
                                     class="headerNavigation">{{ $product->name }}</a>
                </div>
            </div>
            <div class="contentMain">
                <form name="buy_now_" id="buy_now_">
                    <div class="ProductInfoContainer">

                        <div class="ProductInfoContainerLeft ProductInfoContainerLeftImage">
                            <script>
                                (function ($) {
                                    $('.mousetrap').live('click', function () {
                                        $('#zoom1').click();
                                    });
                                })(jQuery);
                            </script>
                            <div id="wrap" style="top:0px; position:relative;"><a id="zoom1"
                                                                                  class="thickbox cloud-zoom cboxElement"
                                                                                  href="http://www.braunbuffel.com.au/images/col_flapy/flapy28bir.jpg"
                                                                                  rel="adjustX: 0, adjustY:-1"
                                                                                  style="position: relative; display: block;">
                                    <img src="{{ asset('product/' . $product->id . '.' . $product->photo_extension) }}"
                                         border="0"
                                         alt="{{ $product->name }}" title="{{ $product->name }}" width="455"
                                         height="455"
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
                                    <td align="right" class="main">
                                        <a href="{{ URL::previous() }}">sebelumnya</a>&nbsp;
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

                @if (count($random) > 0)
                    <table class="infoBoxContents" width="100%" align="left">
                        <tbody>
                        <tr>
                            <td><img src="{{ asset('assets-guest/img/also_available.gif') }}" border="0" alt=""></td>
                        </tr>
                        </tbody>
                    </table>
                @endif

                @foreach ($random as $item)
                    <div class="cssproduct_listing_item_3col cssproduct_listing_item_3col_extended">
                        <div class="cssproduct_listing_item_image cssproduct_listing_content">
                            <a href="{{ url('item/' . $item->id) }}">
                                <img src="{{ asset('product/' . $item->id . '.' . $item->photo_extension) }}"
                                     border="0" alt="{{ $item->name }}" title="{{ $item->name }}" width="240"
                                     height="240">
                                <span class="thumbnailhover"
                                      style="display:none;">{{ asset('product/' . $item->id . '.' . $item->photo_extension) }}</span>
                                <span class="thumbnailorig"
                                      style="display:none;">{{ asset('product/' . $item->id . '.' . $item->photo_extension) }}</span>
                            </a>
                        </div>
                        <div class="cssproduct_listing_content">
                            <a href="{{ url('item/' . $item->id) }}"
                               class="list">{{ $item->name}}
                            </a>
                        </div>
                        <div class="cssproduct_listing_content">
                            <span class="productPrice">{{ $item->description }}</span>
                        </div>
                    </div>
                @endforeach
                <div class="cssclear"></div>
            </div>
            <div class="contentBottom">
            </div>
        </div>
        <div class="clearer"></div>
    </div>
@endsection
