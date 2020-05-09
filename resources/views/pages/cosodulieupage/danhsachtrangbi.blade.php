@extends('layouts.master')

{{-- Tiêu đề của trang --}}

@section('title')
Danh Sách Trang Bị
@endsection

{{-- Thẻ meta của trang --}}

@section('meta')
<meta name="description" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:title" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:description" content="Chiến đấu vì vinh quang">
<meta property="og:image" content="https://lienminh.garena.vn/images/Lan_h3lpm3/06_2019/DCTL/bg-hero.jpg">
@endsection
@section('css')
<link href="{{ asset('css/cosodulieu.css') }}" rel="stylesheet">
{{-- Nội dung của trang --}}
@endsection
@section('content')
<div class="row wrap-tab">
    @include ('pages.cosodulieupage.menu')
    <!-- item list tab content  -->
    <div id="items" class="tabcontent">
        <h2>TFT Items - Set 3</h2>
        <div class="wrap-items">
            <div class="base-items">
                <h4>Base Items</h4>
                <div class="list-base-items row">
                    @for ($j = 0; $j < 10; $j++) <div class="wrap-item">
                        <img class="image-base-items" src="{{ asset('images/items/GuardianAngel.png') }}" />
                        <!-- popup-info  -->
                        <div class="popup-base-item">
                            <div class="header">
                                <img src="{{ asset('images/items/RabadonsDeathcap.png') }}" />
                                <div class="wrap-item-name">
                                    <div class="item-name">Mũ phù thủy Rabadon</div>
                                    <div class="power">
                                        <img src="{{ asset('images/items/icon-ap.svg') }}" />
                                        <span>+40% </span>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                Tăng 25% sức mạnh phép thuật
                            </div>
                            <div class="footer">
                                <div class="into">
                                    Into:
                                </div>
                                <div class="list-items">
                                    <img src="{{ asset('images/champions/Ekko.png') }}" />
                                    <img src="{{ asset('images/champions/Ekko.png') }}" />
                                    <img src="{{ asset('images/champions/Ekko.png') }}" />
                                    <img src="{{ asset('images/champions/Ekko.png') }}" />
                                </div>
                            </div>
                        </div>
                        <!-- end popup-info  -->
                </div>
                @endfor
            </div>
        </div>
        <div class="base-items">
            <h4>Combinded Items</h4>
            <div class="list-base-items row">
                @for ($j = 0; $j < 30; $j++) <div class="wrap-item">
                    <img class="image-base-items" src="{{ asset('images/items/GuardianAngel.png') }}" />
                    <!-- popup-info  -->
                    <div class="popup-base-item">
                        <div class="header">
                            <img src="{{ asset('images/items/RabadonsDeathcap.png') }}" />
                            <div class="wrap-item-name">
                                <div class="item-name">Mũ phù thủy Rabadon</div>
                                <div class="power">
                                    <img src="{{ asset('images/items/icon-ap.svg') }}" />
                                    <span>+40% </span>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            Tăng 25% sức mạnh phép thuật
                        </div>
                        <div class="footer">
                            <div class="into">
                                Recipe:
                            </div>
                            <div class="list-items">
                                <img src="{{ asset('images/champions/Ekko.png') }}" />
                                <img src="{{ asset('images/champions/Ekko.png') }}" />
                                <img src="{{ asset('images/champions/Ekko.png') }}" />
                                <img src="{{ asset('images/champions/Ekko.png') }}" />
                            </div>
                        </div>
                    </div>
                    <!-- end popup-info  -->
            </div>
            @endfor
        </div>
    </div>
    <!-- end item list tab content  -->
</div>

@endsection