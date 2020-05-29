@extends ('layouts.master')

{{--Tiêu đề của trang--}}

@section('title')
Đội Hình Chuẩn
@endsection

{{--Thẻ meta của trang--}}

@section('meta')
<meta name="description"
  content="Tổng hợp danh sách các đội hình mạnh nhất chuẩn meta được cập nhật liên tục - Cẩm nang đấu trường chân lý.">
<meta name="keywords"
  content="cẩm nang đấu trường chân lý, cẩm nang dtcl, đội hình mạnh, đội hình meta, danh sách đội hình mạnh nhất">
<meta property="og:title" content="Danh sách đội hình mạnh nhất chuẩn meta Đấu Trường Chân Lý">
<meta property="og:description"
  content="Tổng hợp danh sách các đội hình mạnh nhất chuẩn meta được cập nhật liên tục - Cẩm nang đấu trường chân lý.">
<meta property="og:image" content="{{ asset('images/meta-image/doihinhchuan.jpg') }}">
@endsection

@section('css')
<link href="{{ asset('css/doihinhchuan.css') }}" rel="stylesheet">
@endsection

{{-- Nội dung của trang --}}

@section('content')
<div class="containerTeam">
  <h3 class="listTeam">Danh sách các đội hình mạnh nhất Đấu Trường Chân Lý</h3>
  <p class="version">Phiên bản mới nhất: Patch 10.8</p>

  @foreach ($doihinhchuan as $item)
  <div data-toggle="collapse" href="#collapseExample{{ $loop->index }}" aria-expanded="false"
    aria-controls="collapseExample{{ $loop->index }}" class="expend collapsed">
    <div class="card row-team">
      <div class="card-body team-body padding-1rem">
        <div class="row">
          <div class="col-md-4 col-12 center-row">
            <div class="team-name">
              @if ($item['tier'] === 1)
                <div class="team-rank tone-s">S</div>
              @elseif ($item['tier'] === 2)
                <div class="team-rank tone-a">A</div>
              @elseif ($item['tier'] === 3)
                <div class="team-rank tone-b">B</div>
              @else
                <div class="team-rank tone-c">C</div>
              @endif
              <div class="team-name-elipsis">{{ $item['name'] }}</div>
            </div>
          </div>
          <div class="col-md-8 col-12 center-row">
            <div>
              <div class="team-characters">
                @foreach (json_decode($item['characters']) as $character)
                  @component('components.popup.tuong', ['character'=> $character->name, 'level'=> isset($character->level) ? $character->level : null, 'items'=> isset($character->items) ? $character->items : null])
                  @endcomponent
                @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="collapse" id="collapseExample{{ $loop->index }}">
            <div class="row row-team-builder">
              <div class="col-md-6 text-center">
                <div class="wrap-champions">
                  <!-- start  -->
                  @foreach (json_decode($item['mid']) as $character)
                    @component('components.popup.tuong', ['character'=> $character])
                    @endcomponent
                  @endforeach
                  <!-- end -->
                </div>
                <div class="option-title early-character">Tướng đầu trận</div>
              </div>
              <div class="col-md-6 text-center">
                <div class="wrap-team-builder">
                   <!-- team builder -->
                  @for ($u = 0; $u < 3; $u++)
                    @component('components.popup.hetoc')
                    <div class="origin-class-icon">
                        <img src="{{ asset('images/origin/cybernetic.png') }}" />
                        <div class="origin-class-counter">
                            <span>6</span>
                        </div>
                    </div>
                    @endcomponent
                    <!-- end team builder  -->
                    @endfor
                </div>
                <div class="option-title traits">traits</div>
              </div>
            </div>
            <!-- end-team-bilder  -->
            <div class="row option">
              <div class="col-md-6 text-center">
                <!-- item option -->
                @for ($d = 0; $d < 2; $d++)
                  <div class="item-option-item">
                    <div class="option-out">
                      <!-- start item  -->
                      @for ($h = 0; $h < 2; $h++)
                        @component('components.popup.trangbi')
                        @endcomponent
                      @endfor
                      <!-- end item -->
                    </div>
                    <i style="font-size:24px" class="fa icon-arrow">&#xf105;</i>
                    <div class="option-in">
                      @component('components.popup.trangbi')
                      @endcomponent
                    </div>
                  </div>
                <!-- end item option -->
                @endfor
            <div class="option-title early-item">Trang bị đầu trận</div>
          </div>

          <div class="col-md-6 text-center">
            <!-- item option -->





            @foreach (json_decode($item['replacements']) as $replace) <div class="option-character">
              <div class="option-out-character">
                @if(empty($replace->out))
                  <div class="lv9">lvl 9</div>
                @endif
                @foreach ($replace->out as $out)
                  @component('components.popup.tuong', ['addStyle'=> 'width: 32px; height:32px','character'=> $out])
                  @endcomponent
                @endforeach
              </div>
              <i style="font-size:24px" class="fa icon-arrow">&#xf105;</i>
              <div class="option-in-character">
                @foreach ($replace->in as $in)
                  @component('components.popup.tuong', ['addStyle'=> 'width: 32px; height:32px', 'character'=> $in])
                  @endcomponent
                @endforeach
              </div>
          </div>
          @endforeach





          <!-- end item option -->

          <div class="option-title character-option">Options</div>
        </div>
      </div>
      <!-- end option  -->

      <!-- positioning -->
      <div class="row position">
        <div class="team-positioning">
          <ul id="hexGrid" class="four-row">
            @for ($k = 0; $k < 28; $k++)
              <li class="hex">s
                <div class="hexIn hex-in-{{ $k}}">
                  <div class="hexLink">
                    @foreach(json_decode($item['characters']) as $character)
                      @if(strval($k) === substr($character->position, 1))
                        <img src="{{ asset('images/champions/'.str_replace(' ', '', $character->name).'.png') }}" />
                      @endif
                    @endforeach
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

@endforeach
</div>

<script>
  // Đoạn code này để ngăn không cho collapse khi bấm vào icon tướng
  $('.no-collapsable').on('click', function (e) {
    e.stopPropagation();
  });
</script>

@endsection
