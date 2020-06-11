@extends('layouts.master')

{{-- Tiêu đề của trang --}}

@section('title')
Danh Sách Tướng
@endsection

{{-- Thẻ meta của trang --}}

@section('meta')
<meta name="description" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:title" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:description" content="Chiến đấu vì vinh quang">
<meta property="og:image" content="https://lienminh.garena.vn/images/Lan_h3lpm3/06_2019/DCTL/bg-hero.jpg">
@endsection

@section('css')
<link href="{{ asset('css/danhsachtuong.css') }}" rel="stylesheet">
<link href="{{ asset('css/cosodulieu.css') }}" rel="stylesheet">
<link href="{{ asset('css/danhsachhe.css') }}" rel="stylesheet">
@endsection

{{-- Nội dung của trang --}}

@section('content')

<div class="row wrap-tab">
  @include ('pages.cosodulieupage.menu')
  <!-- classes tab content  -->
  <div class="tabcontent">
    <div class="container">
      <div class="wrap-class">
        <div class="search">
          <h2>Danh Sách Tướng</h2>
          <input class="form-control" id="myInput" type="text" placeholder="Tìm kiếm tướng">
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
          <div class="team-characters">
            @for ($k = 0; $k < 15; $k++)
              @component('components.popup.tuong', ['character'=> 'Yasuo'])
              @endcomponent
          @endfor
      </div>
    </div>
    @endfor
  </div>
</div>
<!-- end classes tab content  -->



@endsection