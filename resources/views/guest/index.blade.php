@extends('guest-layout')

@section('content')
    <div class="bodyContainer">
        <div class="bodyContainerWrapper">
        </div>
        <div class="bodyContainerWrapper">
            <div class="contentTop">
            </div>
            <div class="contentMain">
                <div class="sliderContent">
                    <div id="slider" style="width: 755px; min-height: 460px; ">
                        <ul style="width: 3775px;">
                            @if (isset($promo))
                                <li style="float: left;">
                                    <img border="0" src="{{ asset('promo/' . $promo->id . '.' . $promo->photo_extension) }}"
                                         width="755">

                                    <div class="home_banner_text" style="right:380px;bottom:300px;width:260px;">
                                        <h2 class="white">{{ $promo->name }}</h2>

                                        <h3 class="white">{{ $promo->description }}</h3>

                                    </div>
                                </li>
                            @else
                                <li style="float: left;">
                                    <img border="0" src="{{ asset('assets-guest/img/hp_14_12_09_campaign.jpg') }}"
                                         width="755">

                                    <div class="home_banner_text" style="right:410px;bottom:260px;width:260px;">
                                        <h3 class="white">Featuring</h3>

                                        <h2 class="white">The Dynamic Duet</h2>

                                        <div style="position:absolute;left:0;margin-top:10px;">
                                            <a href="http://www.braunbuffel.com.au/women-new-arrivals-fc-1035_1216.html">
                                            <span class="buttons"><button type="submit" class="transwhite  "><span
                                                            class="ui-text">Wanita</span></button></span>
                                            </a>
                                        </div>
                                        <div style="position:absolute;right:0;margin-top:10px;">
                                            <a href="http://www.braunbuffel.com.au/men-new-arrivals-fc-1036_1216.html">
                                            <span class="buttons"><button type="submit" class="transwhite  "><span
                                                            class="ui-text">Pria</span></button></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

                <div style="background-color:none;width:100%;margin-top: 16px;">

                    @foreach ($random as $item)
                        <div class="home_listing_item" style="margin-left:0px;">
                            <a href="{{ url('item/' . $item->id) }}">
                                <div class="home_listing_item_content">
                                    <img border="0"
                                         width="100%"
                                         src="{{ asset('product/' . $item->id . '.' . $item->photo_extension) }}">

                                    <div class="overlay"></div>
                                    <div class="home_listing_item_text_hover">
                                        <div class="home_listing_item_text">
                                            <h2 class="white">{{ $item->name }}</h2>

                                            <h3 class="white">{{ $item->description }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="cssclear"></div>
                </div>
                <div class="clearer"></div>
            </div>
            <div class="contentBottom"></div>
        </div>
        <div class="clearer"></div>
    </div>
@endsection
