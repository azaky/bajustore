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
                <div style="float:left">
                    {{--<a href="{{ url('/') }}"></a>&nbsp;&nbsp;--}}
                    <a href="{{ url('/') }}" class="headerNavigation">Home</a>
                    @foreach ($breadcrumb as $page)
                        &nbsp;/&nbsp; <a href="{{ url('collections/' . $page->id) }}"
                                         class="headerNavigation">{{ $page->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="contentMain">
                <div class="categoryHeaderName"><h1>{{ $category->name or "Nama Kategori" }}</h1></div>

                @if (count($products) + count($children) == 0)
                    <div class="productListingMain">
                        <div class="productListingDisplayCount">
                            No item found for category {{ $category->name }}
                        </div>
                    </div>
                @else
                    <div class="productListingMain">
                        <div class="productListingDisplayCount">Displaying <b>1</b> to
                            <b>{{ count($products) + count($children) }}</b> (of
                            <b>{{ count($products) + count($children) }}</b> products / category)
                        </div>
                        <div class="productListingResultPage">Pages: &nbsp;<b>1</b>&nbsp;</div>
                        <div class="clearer"></div>

                        <div class="cssproduct_listing">
                            {{-- Children Category --}}
                            @foreach ($children as $child)
                                <div class="cssproduct_listing_item_3col cssproduct_listing_item_3col_extended">
                                    <div class="cssproduct_listing_cat cssproduct_listing_content">
                                        <a href="{{ url('collections/' . $child->id) }}">
                                            <div style="background:url(images/header_background_240.jpg) black;height:100%">
                                                <h3 id="flapy">{{ $child->name }}</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                            {{-- Children Products --}}
                            @foreach ($products as $product)
                                <div class="cssproduct_listing_item_3col cssproduct_listing_item_3col_extended">
                                    <div class="cssproduct_listing_item_image cssproduct_listing_content">
                                        <a href="{{ url('item/' . $product->id) }}">
                                            <img src="{{ asset($product->photo_link) }}" border="0"
                                                 alt="{{ $product->name }}" title=" Flapy Sling Bag " width="240"
                                                 height="240">
                                            <span class="thumbnailhover"
                                                  style="display:none;">{{ asset($product->photo_link) }}</span>
                                            <span class="thumbnailorig"
                                                  style="display:none;">{{ asset($product->photo_link) }}</span>
                                        </a>
                                    </div>
                                    <div class="cssproduct_listing_content">
                                        <a href="{{ url('item/' . $product->id) }}" class="list">
                                            {{ $product->name }}
                                        </a>
                                    </div>
                                    <div class="cssproduct_listing_content">&nbsp;{{ $product->description }}</div>
                                </div>
                            @endforeach

                            <div class="cssclear"></div>
                        </div>
                        <div class="clearer"></div>
                        <div class="productListingDisplayCount">Displaying <b>1</b> to
                            <b>{{ count($products) + count($children) }}</b> (of
                            <b>{{ count($products) + count($children) }}</b> products / category)
                        </div>
                        <div class="productListingResultPage">Pages: &nbsp;<b>1</b>&nbsp;</div>
                    </div>
                @endif
            </div>
            <div class="contentBottom">
            </div>
        </div>
        <div class="clearer"></div>
    </div>
@endsection