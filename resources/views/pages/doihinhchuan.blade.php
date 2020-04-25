@extends ('layouts.master')

{{--Tiêu đề của trang--}}

@section('title')
Đội Hình Chuẩn
@endsection

{{--Thẻ meta của trang--}}

@section('meta')
<meta name="description" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:title" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:description" content="Chiến đấu vì vinh quang">
<meta property="og:image" content="https://lienminh.garena.vn/images/Lan_h3lpm3/06_2019/DCTL/bg-hero.jpg">
@endsection

@section('css')
<link href="{{ asset('css/doihinhchuan.css') }}" rel="stylesheet">
@endsection

{{-- Nội dung của trang --}}

@section('content')
<div class="container containerTeam">
  <h3 class="listTeam">Danh sách các đội hình mạnh nhất Đấu Trường Chân Lý</h3>
  <p class="version">Phiên bản mới nhất: Patch 10.7</p>

  @for ($i = 0; $i < 10; $i++) <div data-toggle="collapse" href="#collapseExample{{ $i }}" aria-expanded="false"
    aria-controls="collapseExample{{ $i }}" class="expend collapsed">
    <div class="card row-team">
      <div class="card-body team-body padding-1rem">
        <div class="row">
          <div class="col-md-4 col-12 center-row">
            <div class="team-name">
              <div class="team-rank tone">S</div>
              <div class="team-name-elipsis">Mech Infiltrators</div>
            </div>
          </div>
          <div class="col-md-8 col-12 center-row">
            <div>
              <div class="team-characters">
                @for ($j = 0; $j < 10; $j++) <div class="characters-item no-collapsable">
                  <div class="image-champions">
                    <img src="{{ asset('images/champions/Ekko.png') }}" />
                  </div>
                  <!-- start popup  -->
                  <div class="row popup-info">
                    <div class="col-md-3 col-3 info">
                      <img src="{{ asset('images/champions/Ekko.png') }}" />
                      <p>Ekko</p>
                    </div>
                    <div class="col-md-7 col-7 origin-wrap">
                      <div class="origin">
                        <img src="{{ asset('images/origin/cybernetic.png') }}" />
                        <p>Siêu Công Nghệ</p>
                      </div>
                      <div class="origin">
                        <img src="{{ asset('images/origin/infiltrator.png') }}" />
                        <p>Mật Thám</p>
                      </div>
                    </div>
                    <div class="col-md-2 col-2 cost">
                      <img src="{{ asset('images/icon-gold.svg') }}" />
                      <div>5</div>
                    </div>
                    <div class="col-md-12 item">
                      <div>Items:</div>
                      <img src="{{ asset('images/items/GuardianAngel.png') }}" />
                      <img src="{{ asset('images/items/Morellonomicon.png') }}" />
                      <img src="{{ asset('images/items/SpearofShojin.png') }}" />
                    </div>
                  </div>
                  <!-- end popup  -->
              </div>
              @endfor


            </div>
          </div>
        </div>
      </div>
      <div class="collapse" id="collapseExample{{ $i }}">
        <div class="row row-team-builder">
          <div class="col-md-6 text-center">
            <div class="wrap-champions">

              <!-- start  -->
              @for ($b = 0; $b < 5; $b++)
              <div class="champion">
                <img src="{{ asset('images/champions/Ekko.png') }}" />
                <!-- start popup  -->
                <div class="row popup-info popup-champion">
                  <div class="col-md-3 col-3 info">
                    <img src="{{ asset('images/champions/Ekko.png') }}" />
                    <p>Ekko</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="origin">
                      <img src="{{ asset('images/origin/cybernetic.png') }}" />
                      <p>Siêu Công Nghệ</p>
                    </div>
                    <div class="origin">
                      <img src="{{ asset('images/origin/infiltrator.png') }}" />
                      <p>Mật Thám</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="{{ asset('images/icon-gold.svg') }}" />
                    <div>5</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Items:</div>
                    <img src="{{ asset('images/items/GuardianAngel.png') }}" />
                    <img src="{{ asset('images/items/Morellonomicon.png') }}" />
                    <img src="{{ asset('images/items/SpearofShojin.png') }}" />
                  </div>
                </div>
                <!-- end popup  -->
              </div>
              @endfor
              <!-- end  -->
            </div>
            <div class="option-title">Early Champions</div>
          </div>
          <div class="col-md-6 text-center">
            <div class="wrap-team-builder">
              @for ($u = 0; $u < 3; $u++) <!-- team builder -->
                <div class="builder-bonus-item">
                  <div class="builder-bonus-icon">
                    <img src="{{ asset('images/origin/cybernetic.png') }}" />
                    <div class="builder-bonus-counter">
                      <span>6</span>
                    </div>
                  </div>
                  <!-- popup-info  -->
                  <div class="popup-builder-item">
                    <div class="header">
                      <img src="{{ asset('images/origin/cybernetic.png') }}" />
                      <div>Vệ Binh Tinh Tú</div>
                    </div>
                    <div class="content">
                      <div class="dis">
                        Khi tướng Vệ Binh Tinh Tú dùng kỹ năng,các tướng Vệ Binh Tinh Tú khác sẽ nhận thêm năng lượng.
                      </div>
                      <div class="list-dis">
                        <div class="counter">3</div>
                        <div class="counter-dis">Tổng 30 năng lượng.</div>
                      </div>
                      <div class="list-dis">
                        <div class="counter">6</div>
                        <div class="counter-dis">Tổng 60 năng lượng.</div>
                      </div>
                    </div>
                    <div class="footer">
                      <div class="title">
                        Champions:
                      </div>
                      <div class="list-champions">
                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                      </div>
                    </div>
                  </div>
                  <!-- end popup-info  -->
                </div>
                <!-- end team builder  -->
                @endfor
            </div>
            <div class="option-title">traits</div>
          </div>
        </div>
        <!-- end-team-bilder  -->
        <div class="row option">
          <div class="col-md-6 text-center">
            <!-- item option -->
            @for ($d = 0; $d < 2; $d++) <div class="item-option-item">
              <div class="option-out">
                <!-- start  -->
                @for ($h = 0; $h < 2; $h++) <div class="option-out-item">
                  <img src="{{ asset('images/items/TearoftheGoddess.png') }}" />
                  <!-- popup-info  -->
                  <div class="popup-early-item">
                    <div class="header">
                      <img src="{{ asset('images/items/TearoftheGoddess.png') }}" />
                      <div class="wrap-item-name">
                        <div class="item-name">Gậy quá khổ</div>
                        <div class="power">
                          <img src="{{ asset('images/items/icon-ap.svg') }}" />
                          <span>+15 </span>
                        </div>
                      </div>
                    </div>
                    <div class="content">
                      Tăng 25% sức mạnh phép thuật
                    </div>
                    <div class="footer">
                      <div class="into">
                        Into:
                      </div>
                      <div class="list-items">
                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                      </div>
                    </div>
                  </div>
                  <!-- end popup-info  -->
              </div>
              @endfor
              <!-- end  -->
          </div>
          <i style="font-size:24px" class="fa icon-arrow">&#xf105;</i>
          <div class="option-in">
            <img src="{{ asset('images/items/RabadonsDeathcap.png') }}" />
            <!-- popup-info  -->
            <div class="popup-early-item">
              <div class="header">
                <img src="{{ asset('images/items/RabadonsDeathcap.png') }}" />
                <div class="wrap-item-name">
                  <div class="item-name">Mũ phù thủy Rabadon</div>
                  <div class="power">
                    <img src="{{ asset('images/items/icon-ap.svg') }}" />
                    <span>+40% </span>
                  </div>
                </div>
              </div>
              <div class="content">
                Tăng 25% sức mạnh phép thuật
              </div>
              <div class="footer">
                <div class="into">
                  Into:
                </div>
                <div class="list-items">
                  <img src="{{ asset('images/champions/Ekko.png') }}" />
                  <img src="{{ asset('images/champions/Ekko.png') }}" />
                  <img src="{{ asset('images/champions/Ekko.png') }}" />
                  <img src="{{ asset('images/champions/Ekko.png') }}" />
                </div>
              </div>
            </div>
            <!-- end popup-info  -->
          </div>
        </div>
        <!-- end item option -->
        @endfor
        <div class="option-title">Early Items</div>
      </div>

      <div class="col-md-6 text-center">
        <!-- item option -->
        @for ($n = 0; $n < 2; $n++) <div class="option-character">
          <div class="option-out-character">
            @for ($h = 0; $h < 2; $h++) <div class="option-out-item option-out-chracter">
              <img src="{{ asset('images/champions/Lux(1).png') }}" />
              <!-- start popup  -->
              <div class="row popup-info popup-character-info">
                <div class="col-md-3 col-3 info">
                  <img src="{{ asset('images/champions/Ekko.png') }}" />
                  <p>Ekko</p>
                </div>
                <div class="col-md-7 col-7 origin-wrap">
                  <div class="origin">
                    <img src="{{ asset('images/origin/cybernetic.png') }}" />
                    <p>Siêu Công Nghệ</p>
                  </div>
                  <div class="origin">
                    <img src="{{ asset('images/origin/infiltrator.png') }}" />
                    <p>Mật Thám</p>
                  </div>
                </div>
                <div class="col-md-2 col-2 cost">
                  <img src="{{ asset('images/icon-gold.svg') }}" />
                  <div>5</div>
                </div>
                <div class="col-md-12 item">
                  <div>Items:</div>
                  <img src="{{ asset('images/items/GuardianAngel.png') }}" />
                  <img src="{{ asset('images/items/Morellonomicon.png') }}" />
                  <img src="{{ asset('images/items/SpearofShojin.png') }}" />
                </div>
              </div>
              <!-- end popup  -->
          </div>
          @endfor
      </div>
      <i style="font-size:24px" class="fa icon-arrow">&#xf105;</i>
      <div class="option-in-character">
        @for ($h = 0; $h < 2; $h++) <div class="option-out-item option-out-chracter">
          <img src="{{ asset('images/champions/Poppy(1).png') }}" />
          <!-- start popup  -->
          <div class="row popup-info popup-character-info">
            <div class="col-md-3 col-3 info">
              <img src="{{ asset('images/champions/Ekko.png') }}" />
              <p>Ekko</p>
            </div>
            <div class="col-md-7 col-7 origin-wrap">
              <div class="origin">
                <img src="{{ asset('images/origin/cybernetic.png') }}" />
                <p>Siêu Công Nghệ</p>
              </div>
              <div class="origin">
                <img src="{{ asset('images/origin/infiltrator.png') }}" />
                <p>Mật Thám</p>
              </div>
            </div>
            <div class="col-md-2 col-2 cost">
              <img src="{{ asset('images/icon-gold.svg') }}" />
              <div>5</div>
            </div>
            <div class="col-md-12 item">
              <div>Items:</div>
              <img src="{{ asset('images/items/GuardianAngel.png') }}" />
              <img src="{{ asset('images/items/Morellonomicon.png') }}" />
              <img src="{{ asset('images/items/SpearofShojin.png') }}" />
            </div>
          </div>
          <!-- end popup  -->
      </div>
      @endfor
      <!-- <img src="{{ asset('images/champions/Lulu.png') }}" />
                <img src="{{ asset('images/champions/Poppy(1).png') }}" /> -->
    </div>
</div>
@endfor
<!-- end item option -->

<div class="option-title">Options</div>
</div>
</div>
<!-- end option  -->

<!-- positioning -->
<div class="row position">
  <div class="team-positioning">
    <ul id="hexGrid" class="four-row">
      @for ($k = 0; $k < 28; $k++) <li class="hex">s
        <div class="hexIn hex-in-{{$k}}">
          <div class="hexLink">
            @if($k == 3 || $k == 21 || $k == 22 || $k == 23)
            <img src="{{ asset('images/champions/Lulu.png') }}" />
            @endif
          </div>
        </div>
        </li>
        @endfor
    </ul>
  </div>
  <div class="option-title position-title">Positioning</div>
</div>
<!-- end positioning -->
</div>
</div>
</div>
</div>

@endfor
</div>

<script>
  // Đoạn code này để ngăn không cho collapse khi bấm vào icon tướng
  $('.no-collapsable').on('click', function (e) {
    e.stopPropagation();
  });
</script>

@endsection