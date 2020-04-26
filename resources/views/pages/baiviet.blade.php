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
@section('jsBaiViet')
<script src="{{ asset('js/baiviet.js') }}" rel="stylesheet"></script>
@endsection
{{-- Nội dung của trang --}}

@section('postcontent')

<div class="wrap-post">
  <!-- banner  -->
  <div class="banner-post" id = "banner">
    <div class="treding-post">
      <div class="treding-post-title">
        <h5>
          Treding Posts
        </h5>
      </div>
      <div class="treding-post-list">
      @for($t=0; $t < 5; $t++)
      <!-- post item  -->
        <div class="row treding-post-item">
          <div class="col-md-4">
            <img class="card-img-top" src="{{ asset('images/post/test.jpg') }}" alt="Card image" style="width:100%">
          </div>
          <div class="col-md-8">
            <div class="title">Đấu Trường Chân Lý: TOP 4 món trang bị mà bất cứ đội hình nào cũng buộc phải lên</div>
            <div class="date">
              <i class="fas fa-clock"></i>
              <span>19-04-2020</span>
            </div>
          </div>
        </div>
         <!-- end post item  -->
         @endfor
      </div>
    </div>
    <div class="patch" id = "patch">
      <div class="text-intro">
        <h1>Đấu Trường Chân Lý</h1>
        <h3>Mùa 3 - Vô Hạn Thiên Hà - bản patch 10.8</h3>
      </div>
      <div class="video">
        <iframe width="408" height="230" src="https://www.youtube.com/embed/cXdZLWWZQZE?rel=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <!-- end banner  -->
  <div class="content-post container">
    <h2 class="post-header">Top Những Bài Viết Hay VKL</h2>
    <div class="row">
        @for($k = 0; $k < 9; $k++) <!-- post item -->
          <div class="col-md-4 post-item">
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/post/test.jpg') }}" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Đấu Trường Chân Lý: TOP 4 món trang bị mà bất cứ đội hình nào cũng buộc phải lên
                </h4>
              </div>
            </div>
          </div>
          <!-- end post item  -->
          @endfor
    </div>
    <div class="load-more">
      <button class = "btn btn-primary"> Xem Thêm</button>
    </div>
  </div>
</div>
@endsection
