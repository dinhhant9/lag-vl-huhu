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

@section('cssDoiHinhChuan')
<link href="{{ asset('css/doihinhchuan.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

{{-- Nội dung của trang --}}

@section('content')
<div class="containerTeam">
  <h3 class="listTeam">Danh sách các đội hình mạnh nhất Đấu Trường Chân Lý</h3>
  <p class="version">Phiên bản mới nhất: Patch 10.7</p>

  @for ($i = 0; $i < 10; $i++) <div data-toggle="collapse" href="#collapseExample{{ $i }}" aria-expanded="false"
    aria-controls="collapseExample{{ $i }}" class="expend collapsed">
    <div class="card row-team">
      <div class="card-body team-body">
        <div class="row">
          <div class="col-md-4 col-7">
            <div class="team-name">
              <div class="team-rank tone">S</div>
              <div class="team-name-elipsis">Mech Infiltrators</div>
            </div>
          </div>
          <div class="col-md-8 col-5">
            <div>
              <div class="team-characters">
                @for ($j = 0; $j < 10; $j++) <div class="characters-item">
                  <div class="image-champions">
                    <img src="{{ asset('images/champions/Ekko.png') }}" />
                  </div>
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
              <img src="{{ asset('images/champions/Ekko.png') }}" />
              <img src="{{ asset('images/champions/Ekko.png') }}" />
              <img src="{{ asset('images/champions/Ekko.png') }}" />
              <img src="{{ asset('images/champions/Ekko.png') }}" />
              <div class="option-title">Early Champions</div>
            </div>
          </div>
          <div class="col-md-6 text-center">
            <div class="wrap-team-builder">
              <!-- team builder  -->
              <div class="builder-bonus-item">
                <div class="builder-bonus-icon">
                  <img src="{{ asset('images/origin/cybernetic.png') }}" />
                  <div class="builder-bonus-counter">
                    <span>6</span>
                  </div>
                </div>
              </div>
              <!-- end team builder  -->
              <!-- team builder  -->
              <div class="builder-bonus-item">
                <div class="builder-bonus-icon">
                  <img src="{{ asset('images/origin/cybernetic.png') }}" />
                  <div class="builder-bonus-counter">
                    <span>6</span>
                  </div>
                </div>
              </div>
              <!-- end team builder  -->
              <!-- team builder  -->
              <div class="builder-bonus-item">
                <div class="builder-bonus-icon">
                  <img src="{{ asset('images/origin/cybernetic.png') }}" />
                  <div class="builder-bonus-counter">
                    <span>6</span>
                  </div>
                </div>
              </div>
              <!-- end team builder  -->
            </div>
            <div class="option-title">traits</div>
          </div>
        </div>
        <!-- end-team-bilder  -->
        <div class="row option">
          <div class="col-md-6 text-center">
            <!-- item option -->
            <div class="item-option-item">
              <div class="option-out">
                <img src="{{ asset('images/items/NeedlesslyLargeRod.png') }}" />
                <img src="{{ asset('images/items/NeedlesslyLargeRod.png') }}" />
              </div>
              <i style="font-size:24px" class="fa icon-arrow">&#xf105;</i>
              <div class="option-in">
                <img src="{{ asset('images/items/RabadonsDeathcap.png') }}" />
              </div>
            </div>
            <!-- end item option -->
            <!-- item option -->
            <div class="item-option-item">
              <div class="option-out">
                <img src="{{ asset('images/items/TearoftheGoddess.png') }}" />
                <img src="{{ asset('images/items/TearoftheGoddess.png') }}" />
              </div>
              <i style="font-size:24px" class="fa icon-arrow">&#xf105;</i>
              <div class="option-in">
                <img src="{{ asset('images/items/RabadonsDeathcap.png') }}" />
              </div>
            </div>
            <!-- end item option -->
            <div class="option-title">Early Items</div>
          </div>

          <div class="col-md-6 text-center">
            <!-- item option -->
            <div class="option-character">
              <div class="option-out-character">
                <img src="{{ asset('images/champions/Lux(1).png') }}" />
                <img src="{{ asset('images/champions/Velkoz.png') }}" />
              </div>
              <i style="font-size:24px" class="fa icon-arrow">&#xf105;</i>
              <div class="option-in-character">
                <img src="{{ asset('images/champions/Lulu.png') }}" />
                <img src="{{ asset('images/champions/Poppy(1).png') }}" />
              </div>
            </div>
            <!-- end item option -->
            <!-- item option -->
            <div class="option-character">
              <div class="option-out-character">
                <img src="{{ asset('images/champions/Lux(1).png') }}" />
                <img src="{{ asset('images/champions/Velkoz.png') }}" />
              </div>
              <i style="font-size:24px" class="fa icon-arrow">&#xf105;</i>
              <div class="option-in-character">
                <img src="{{ asset('images/champions/Lulu.png') }}" />
                <img src="{{ asset('images/champions/Poppy(1).png') }}" />
              </div>
            </div>
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

@endsection