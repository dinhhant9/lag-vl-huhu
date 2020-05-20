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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

{{-- Nội dung của trang --}}

@section('content')

<div class="row wrap-tab">
  @include ('pages.cosodulieupage.menu')
  <!-- classes tab content  -->
  <div id="classes" class="tabcontent" style="margin-top: 30px;">
    <div style="padding: 25px 20px;">
      <div class="updated" style="margin-bottom: 50px;">
        <div><b>Last Updated:</b> Patch 10.8b</div>
        <div class="legend">
          <div>
            <div class="legend-up"><i class="fa fa-sort-asc" aria-hidden="true"></i></div>
            Tier Up
          </div>
          <div>
            <div class="legend-item"><i class="fa fa-sort-desc" aria-hidden="true"></i></div>
            Tier Down
          </div>
        </div>
      </div>
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="tier-group">
            <div class=" characters-categorytone">
              <h3>S</h3>
            </div>
            <div class="characters-list ">
              @for ($j = 0; $j < 6; $j++) 
                <div class="characters-item">
                  @component('components.popup.tuong')
                  @endcomponent 
                </div>
              @endfor
            </div>
          </div>
          <div class="tier-group">
            <div class="characters-categoryttow">
              <h3>A</h3>
            </div>
            <div class="characters-list">
            @for ($j = 0; $j < 10; $j++) 
                <div class="characters-item">
                  @component('components.popup.tuong')
                  @endcomponent 
                </div>
            @endfor
            </div>

          </div>
          <div class="tier-group">
            <div class="characters-categorytthree">
              <h3>B</h3>
            </div>
            <div class="characters-list">
            @for ($j = 0; $j < 10; $j++) 
                <div class="characters-item">
                  @component('components.popup.tuong')
                  @endcomponent 
                </div>
            @endfor

            </div>
          </div>
          <div class="tier-group">
            <div class="characters-categorytfour">
              <h3>C</h3>
            </div>
            <div class="characters-list">
            @for ($j = 0; $j < 10; $j++) 
                <div class="characters-item">
                  @component('components.popup.tuong')
                  @endcomponent 
                </div>
            @endfor
            </div>
          </div>
          <div class="tier-group">
            <div class="characters-categorysix">
              <h3>E</h3>
            </div>
            <div class="characters-list">
            @for ($j = 0; $j < 10; $j++) 
                <div class="characters-item">
                  @component('components.popup.tuong')
                  @endcomponent 
                </div>
            @endfor
            </div>
          </div>
        </div>
        {{-- <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div> --}}
      </div>
    </div>
  </div>
</div>
<!-- end classes tab content  -->



@endsection