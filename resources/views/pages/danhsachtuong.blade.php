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

{{-- Nội dung của trang --}}

@section('content')

  <div class = "container">
    <div class="row">
      <div class="col-sm-4">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Danh sách tướng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Danh sách trang bị</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cách ghép đồ</a>
          </li>
        </ul>
      </div>

      <div class="col-sm-8">
        @for ($j = 0; $j < 100; $j++)
          <img src="{{ asset('images/champions/Ekko.png') }}" />
        @endfor
      </div>
    </div>
  </div>

@endsection