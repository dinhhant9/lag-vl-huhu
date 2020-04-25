@extends('layouts.master')

{{-- Tiêu đề của trang --}}

@section('title')
Bài Viết
@endsection

{{-- Thẻ meta của trang --}}

@section('meta')
<meta name="description" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:title" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:description" content="Chiến đấu vì vinh quang">
<meta property="og:image" content="https://lienminh.garena.vn/images/Lan_h3lpm3/06_2019/DCTL/bg-hero.jpg">
@endsection
@section('cssBaiViet')
<link href="{{ asset('css/baiviet.css') }}" rel="stylesheet">
@endsection
{{-- Nội dung của trang --}}

@section('content')

<div class="wrap-post">
  <!-- banner  -->
  <div class="banner-post">
    <div class="treding-post">
      <div class="treding-post-title">
        <h5>
          Treding Posts
        </h5>
      </div>
      <img src="{{ asset('images/treding.png') }}" alt="" style="width: 100%">
    </div>
    <div class="patch">
      <h1>Đấu Trường Chân Lý</h1>
      <h3>Phiên bản 10.8</h3>
      <div class="video">
        <iframe width="408" height="230" src="https://www.youtube.com/embed/cXdZLWWZQZE?rel=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <!-- end banner  -->
  <div class="content-post container">
    <h2 class="post-header">Top Những Bài Viết Hay VKL</h2>
    <div class="row">
        @for($k = 0; $k < 16; $k++) <!-- post item -->
          <div class="col-md-4 post-item">
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/post/test.jpg') }}" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Đấu Trường Chân Lý: TOP 4 món trang bị mà bất cứ đội hình nào cũng buộc phải lên
                </h4>
                <a href="#" class="btn btn-primary">Xem Chi Tiết</a>
              </div>
            </div>
          </div>
          <!-- end post item  -->
          @endfor
    </div>
    <div class="load-more btn btn-primary">Xem Thêm</div>
  </div>
</div>

@endsection