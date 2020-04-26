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
@section('cssCoSoDuLieu')
<link href="{{ asset('css/cosodulieu.css') }}" rel="stylesheet">
{{-- Nội dung của trang --}}
@endsection
@section('content')
<div class="row wrap-tab">
    @include ('pages.cosodulieupage.menu')
    <!-- classes tab content  -->
    <div id="classes" class="tabcontent">
            <h1>Classes</h1>
    </div>
     <!-- end classes tab content  -->
</div>

@endsection