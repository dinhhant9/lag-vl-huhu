@extends('layouts.master')

{{-- Tiêu đề của trang --}}

@section('title')
Danh Sách Hệ
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
<link href="{{ asset('css/danhsachhe.css') }}" rel="stylesheet">
{{-- Nội dung của trang --}}
@endsection
@section('content')
<div class="row wrap-tab">
    @include ('pages.cosodulieupage.menu')
    <!-- classes tab content  -->
    <div class="tabcontent">
        <div class="container">
            <div class="wrap-class">
                <div class="search">
                    <h2>Danh Sách Hệ</h2>
                    <input class="form-control" id="myInput" type="text" placeholder="Tìm kiếm hệ">
                </div>
                <div class="divider"></div>
                <div class="update">
                    <div class="update-patch">Patch 10.10</div>
                    <div class="legend">
                        <div class="legend-item">
                            <div class="legend-up">▴</div>Tier Up
                        </div>
                        <div class="legend-item">
                            <div class="legend-down">▾</div>Tier Down
                        </div>
                    </div>
                </div>
                @for ($j = 0; $j < 5; $j++) <div class="tier-group">
                    <div class="characters-category tone">
                        <h3>S</h3>
                    </div>
                    <div class="characters-list">
                        @for ($k = 0; $k < 5; $k++) <div class="characters-item">
                            @component('components.popup.hetoc')
                            <div class="character-wrapper">
                                <img class="character-icon" src="https://rerollcdn.com/icons/blademaster.png"
                                    alt="Blademaster">
                                <div class="" style="text-align: center;">Kiếm Khách</div>
                            </div>
                            @endcomponent
                    </div>
                    @endfor
            </div>
        </div>
        @endfor
    </div>
</div>
<!-- end classes tab content  -->
</div>
@endsection