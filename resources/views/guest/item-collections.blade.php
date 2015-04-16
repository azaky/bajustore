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
                                            <img src="{{ asset('product/' . $product->id . '.' . $product->photo_extension) }}"
                                                 border="0" alt="{{ $product->name }}" title=" Flapy Sling Bag "
                                                 width="240" height="240">
                                            <span class="thumbnailhover"
                                                  style="display:none;">{{ asset('product/' . $product->id . '.' . $product->photo_extension) }}</span>
                                            <span class="thumbnailorig"
                                                  style="display:none;">{{ asset('product/' . $product->id . '.' . $product->photo_extension) }}</span>
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