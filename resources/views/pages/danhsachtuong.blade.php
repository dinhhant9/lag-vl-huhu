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
@section('cssCoSoDuLieu')
<link href="{{ asset('css/cosodulieu.css') }}" rel="stylesheet">
{{-- Nội dung của trang --}}

@section('content')

<div class="row wrap-tab">
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Danh sách tướng</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Danh sách trang bị</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Cách ghép đồ</button>
    </div>

    <div id="London" class="tabcontent">
        <h2>TFT Champions - Set 3</h2>
        <div class="wrap-champions">
            @for ($j = 0; $j < 100; $j++)
              <img src="{{ asset('images/champions/Ekko.png') }}" />
            @endfor
          </div>
    </div>

    <div id="Paris" class="tabcontent">
        <h2>TFT Items - Set 3</h2>
        <div class="wrap-items">
            @for ($j = 0; $j < 100; $j++)
              <img src="{{ asset('images/items/GuardianAngel.png') }}" />
            @endfor
        </div>
    </div>

    <div id="Tokyo" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
    </div>
</div>

<!-- <div>
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
  </div> -->

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
@endsection