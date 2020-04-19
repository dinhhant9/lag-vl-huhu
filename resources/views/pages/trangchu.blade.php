@extends('layouts.master')

{{-- Tiêu đề của trang --}}

@section('title')
Trang Chủ
@endsection

{{-- Thẻ meta của trang --}}

@section('meta')
<meta name="description" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
  <meta property="og:title" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
  <meta property="og:description" content="Chiến đấu vì vinh quang">
  <meta property="og:image" content="https://lienminh.garena.vn/images/Lan_h3lpm3/06_2019/DCTL/bg-hero.jpg">
@endsection

@section('cssTrangChu')
<link href="{{ asset('css/trangchu.css') }}" rel="stylesheet">
@endsection

{{-- Nội dung của trang --}}

@section('content')

 <div class = "wrap-home-page">
   <div class="text-center wrap-text-content">
     <h1>Your Companion for Teamfight Tactics</h1>
     <h2>Become the Next Little Legend</h2>
     <p>Play smarter and climb the ranks in TFT with constantly updated item guides, team recommendations, and deep champion stat analysis. Now available in-game!</p>
   </div>
   <!-- intro team and items builder  -->
   <div class="row intro-team">
     <div class="col-md-6">
       <div class="team-title">
         <h2>Item Cheatsheet</h2>
         <p>Instantly see what you can craft out of your current inventory and get a complete description of how each item works.</p>
       </div>
       <div class="item-builder">
          <img class = "items-full" src="{{ asset('images/homepage/items-full.jpg') }}" />
          <img class = "items-crop" src="{{ asset('images/homepage/items-crop.jpg') }}" />
        </div>
     </div>
     <div class="col-md-6">
     <div class="team-title">
         <h2>Team Builds</h2>
         <p>Create stronger teams by planning your composition or choosing a build from our list of curated ones that excel in the current meta.</p>
       </div>
       <div class="item-builder">
          <img class = "items-full" src="{{ asset('images/homepage/comps-full.jpg') }}" />
          <img class = "items-crop" src="{{ asset('images/homepage/comps-crop.jpg') }}" />
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
    <div class="col-md-5">
      <img class = "focus-post-image" src="{{ asset('images/homepage/Ezreal.png') }}" />
    </div>
  </div>
 </div>

@endsection