@extends('layouts.master')

{{-- Tiêu đề của trang --}}

@section('title')
Cẩm Nang Đấu Trường Chân Lý
@endsection

{{-- Thẻ meta của trang --}}

@section('meta')
<meta name="description" content="Cẩm nang đấu trường chân lý, chuyên đăng tải các thông tin về đội hình chuẩn meta, cách ghép đồ, tộc, hệ, v.v cập nhật liên tục.">
<meta name="keywords" content="cẩm nang đấu trường chân lý, cẩm nang dtcl, đội hình mạnh, cách lên đồ, cách ghép đồ, đội hình meta, chi tiết bản cập nhật, danh sách tộc hệ">
  <meta property="og:title" content="Cẩm Nang Đấu Trường Chân Lý">
  <meta property="og:description" content="Chuyên đăng tải các thông tin về đội hình chuẩn meta, cách ghép đồ, tộc, hệ, v.v cập nhật liên tục.">
  <meta property="og:image" content="{{ asset('images/meta-image/trangchu.jpg') }}">
@endsection

@section('css')
<link href="{{ asset('css/trangchu.css') }}" rel="stylesheet">
@endsection

{{-- Nội dung của trang --}}

@section('content')

 <div class = "wrap-home-page">
   <div class="text-center wrap-text-content">
     <h1>Cẩm nang Đấu Trường Chân Lý</h1>
     <h3>Mùa 3 - Vô Hạn Thiên Hà - bản patch 10.8</h3>
     <h2>Đồng hành cùng bạn với những thông tin hữu ích</h2>
     <p>Trở thành Pro và leo rank với những hướng dẫn về đội hình chuẩn meta, chi tiết bản cập nhật, buff, neft và các chỉ số tướng, vật phẩm, tộc, hệ v.v được cập nhật liên tục.</p>
   </div>
   <!-- intro team and items builder  -->
   <div class="row intro-team">
     <div class="col-md-6">
       <div class="team-title">
         <h2>Đội hình chuẩn</h2>
         <p>Danh sách các đội hình kết hợp cực mạnh và chuẩn meta cập nhật liên tục.</p>
       </div>
       <div class="item-builder">
          <img class = "items-full" src="{{ asset('images/homepage/comps-full.jpg') }}" />
          <img class = "items-crop" src="{{ asset('images/homepage/comps-crop.jpg') }}" />
        </div>
     </div>
     <div class="col-md-6">
     <div class="team-title">
         <h2>Cơ sở dữ liệu</h2>
         <p>Nơi bạn có thể xem cách ghép trang bị, danh sách tưởng, tộc, hệ và các chỉ số chi tiết.</p>
       </div>
       <div class="item-builder">
          <img class = "items-full" src="{{ asset('images/homepage/items-full.jpg') }}" />
          <img class = "items-crop" src="{{ asset('images/homepage/items-crop.jpg') }}" />
        </div>
     </div>
   </div>
<!-- end intro team and items builder  -->
  <div class="row post">
    <div class="col-md-7 wrap-post">
      <div class="post-title">
        Bài Viết
      </div>
      <div class="list-post">
      @for ($j = 0; $j < 3; $j++)
        <!-- post-item  -->
        <div class="row item-post">
          <div class="col-md-3 col-4">
          <img src="{{ asset('images/homepage/post1.jpg') }}" />
          </div>
          <div class = "post-info col-md-9 col-8">
            <div class="title">Lorem ipsum dolor sit amet consectetur.</div>
            <div class="date">19-04-2020</div>
            <div class="discription">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam consequuntur in repellat odio expedita? Sed!</div>
          </div>
        </div>
        <!-- end post-item  -->
      @endfor
      </div>
      <div class="view-more text-center">
        <a href="">
            Xem Thêm...
        </a>
      </div>
    </div>
    <div class="col-md-5 center-horizontal">
      <img class = "focus-post-image" src="{{ asset('images/homepage/little-legend.png') }}" />
    </div>
  </div>
 </div>

@endsection