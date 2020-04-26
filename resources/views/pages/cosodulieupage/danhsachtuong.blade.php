@extends('layouts.master')

{{-- Tiêu đề của trang --}}

@section('title')
Danh Sách Tướng Pro
@endsection

{{-- Thẻ meta của trang --}}

@section('meta')
<meta name="description" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:title" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:description" content="Chiến đấu vì vinh quang">
<meta property="og:image" content="https://lienminh.garena.vn/images/Lan_h3lpm3/06_2019/DCTL/bg-hero.jpg">
@endsection
@section('cssCoSoDuLieu')
<link href="{{ asset('css/cosodulieu.css') }}" rel="stylesheet">
{{-- Nội dung của trang --}}
@endsection
@section('content')
<div class="row wrap-tab">
    @include ('pages.cosodulieupage.menu')
    <!-- champions tab content  -->
    <div id="champions" class="tabcontent">
        <h2>Đang đợi Tý Chuột làm page này :3</h2>
        {{-- <div class="wrap-champions">
            @for ($j = 0; $j
            < 30; $j++) <img src="{{ asset('images/champions/Ekko.png') }}" />
            @endfor
        </div> --}}
    </div>
</div>
<!-- end champions tab content  -->
<!-- end item list tab content  -->
@endsection