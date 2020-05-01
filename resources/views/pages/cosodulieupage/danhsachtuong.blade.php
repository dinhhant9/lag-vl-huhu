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
  <div id="classes" class="tabcontent">
    {{-- <div class="col-12 col-lg-3 sidebar">
        <div class="filters-header1"><h5>Lists</h5></div>
        <div class="divider"></div>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Champions</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Team Comps</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Origins</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Classes</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Items</a>
        </div>
        <div class="extra-filters ">
        <div class="filters-header"><h5>Lists</h5>
        <div  class="btn">Rest</div>
      </div>
        </div>
      </div> --}}
    <div style="padding: 25px 20px;">
      {{-- <div class=" row bage-header">
              <div class=" col-sm-6 tier-meta"><h5>TFT Champion Tier List</h5></div>
              <div class=" col-sm-6 seachbar">
                <div class="row m-0 ">
                     <div class="col-1 p-0"><i class="fa fa-search" aria-hidden="true"></i></div>   
                    <div class="col-11 p-0  "><input type="text" placeholder="Seach By name,orgin, or class..."></div>   
                </div>
              </div>
        </div> --}}
      {{-- <div class="divider"></div> --}}
      <div class="updated">
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
              <a class="characters-item c4" href="/champions/irelia">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia"></div>
                <!-- start popup  -->
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c4" href="/champions/jhin">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Jhin.png" alt="Jhin"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Jhin.png" alt="Jhin">
                    <p>Jhin</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/darkstar.png" alt="Dark Star">
                      <p>Dark Star</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/sniper.png" alt="Sniper">
                      <p>Sniper</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">
                    <img class="character-icon" src="https://rerollcdn.com/items/LastWhisper.png" alt="Last Whisper">
                  </div>

                </div>

              </a>
              <a class="characters-item c4" href="/champions/kayle">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Kayle.png" alt="Kayle"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Kayle.png" alt="Kayle">
                    <p>Kayle</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/valkyrie.png" alt="Valkyrie">
                      <p>Valkyrie</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuinsoosRageblade.png"
                      alt="Guinsoo's Rageblade">
                    <img class="character-icon" src="https://rerollcdn.com/items/RapidFirecannon.png"
                      alt="Rapid Firecannon">
                  </div>

                </div>
              </a>
              <a class="characters-item c5" href="/champions/lulu">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Lulu.png" alt="Lulu"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Lulu.png" alt="Lulu">
                    <p>LuLu</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/celestial.png" alt="Celestial">
                      <p>Celestial</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mystic.png" alt="Mystic">
                      <p>Mystic</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>5</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/SpearofShojin.png"
                      alt="Spear of Shojin">
                    <img class="character-icon" src="https://rerollcdn.com/items/SpearofShojin.png"
                      alt="Spear of Shojin">
                    <img class="character-icon" src="https://rerollcdn.com/items/SpearofShojin.png"
                      alt="Spear of Shojin">
                  </div>

                </div>
              </a>
              <a class="characters-item c5" href="/champions/miss_fortune">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/MissFortune.png" alt="Miss Fortune"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/MissFortune.png"
                      alt="Miss Fortune">
                    <p>Fortune</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/valkyrie.png" alt="Valkyrie">
                      <p>Valkyrie</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blaster.png" alt="Blaster">
                      <p>Blaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mercenary.png" alt="Mercenary">
                      <p>Mercenary</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>5</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/GuinsoosRageblade.png"
                      alt="Guinsoo's Rageblade">
                    <img class="character-icon" src="https://rerollcdn.com/items/SpearofShojin.png"
                      alt="Spear of Shojin">
                    <img class="character-icon" src="https://rerollcdn.com/items/SpearofShojin.png"
                      alt="Spear of Shojin">
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="tier-group">
            <div class="characters-categoryttow">
              <h3>A</h3>
            </div>

            <div class="characters-list">
              <a class="characters-item c3" href="/champions/ashe">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Ashe.png" alt="Ashe"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Ashe.png" alt="Ashe">
                    <p>Ashe</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/celestial.png" alt="Celestial">
                      <p>Celestial</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/sniper.png" alt="Sniper">
                      <p>Sniper</p>
                    </div>

                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>3</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Quicksilver.png" alt="Quicksilver">
                    <img class="character-icon" src="https://rerollcdn.com/items/RabadonsDeathcap.png"
                      alt="Rabadon's Deathcap">
                    <img class="character-icon" src="https://rerollcdn.com/items/SeraphsEmbrace.png"
                      alt="Seraph's Embrace">
                  </div>

                </div>
              </a>
              <a class="characters-item c4" href="/champions/chogath">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Chogath.png" alt="Chogath"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Chogath.png" alt="Chogath">
                    <p>Chogath</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/void.png" alt="Void">
                      <p>Void</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/brawler.png" alt="Brawler">
                      <p>Brawler</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/IonicSpark.png" alt="Ionic Spark">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/Morellonomicon.png"
                      alt="Morellonomicon">
                  </div>

                </div>
              </a>
              <a class="characters-item c5" href="/champions/ekko">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Ekko.png" alt="Ekko"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c4" href="/champions/fizz">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Fizz.png" alt="Fizz"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c5" href="/champions/gangplank">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Gangplank.png" alt="Gangplank"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c4 up" href="/champions/jinx">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Jinx.png" alt="Jinx"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c2" href="/champions/kaisa">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Kaisa.png" alt="Kaisa"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c2" href="/champions/lucian">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Lucian.png" alt="Lucian"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c3" href="/champions/rumble">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Rumble.png" alt="Rumble"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c3 down" href="/champions/shaco">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Shaco.png" alt="Shaco"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c3" href="/champions/syndra">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Syndra.png" alt="Syndra"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c5" href="/champions/thresh">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Thresh.png" alt="Thresh"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c4" href="/champions/velkoz">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Velkoz.png" alt="Velkoz"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c5" href="/champions/xerath">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Xerath.png" alt="Xerath"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
            </div>

          </div>
          <div class="tier-group">
            <div class="characters-categorytthree">
              <h3>B</h3>
            </div>
            <div class="characters-list">
              <a class="characters-item c5" href="/champions/aurelion_sol">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/AurelionSol.png" alt="Aurelion Sol"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c2" href="/champions/blitzcrank">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Blitzcrank.png" alt="Blitzcrank"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c3" href="/champions/ezreal">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Ezreal.png" alt="Ezreal"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c3" href="/champions/jayce">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Jayce.png" alt="Jayce"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c3" href="/champions/lux">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Lux.png" alt="Lux"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c3" href="/champions/master_yi">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/MasterYi.png" alt="Master Yi"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c3" href="/champions/neeko">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Neeko.png" alt="Neeko"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c2 down" href="/champions/rakan">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Rakan.png" alt="Rakan"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c2" href="/champions/shen">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Shen.png" alt="Shen"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c4" href="/champions/soraka">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Soraka.png" alt="Soraka"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c3" href="/champions/vi">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Vi.png" alt="Vi"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c4 down" href="/champions/wukong">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Wukong.png" alt="Wukong"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c2" href="/champions/xin_zhao">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/XinZhao.png" alt="Xin Zhao"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>

            </div>
          </div>
          <div class="tier-group">
            <div class="characters-categorytfour">
              <h3>C</h3>
            </div>
            <div class="characters-list">
              <a class="characters-item c2" href="/champions/ahri">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Ahri.png" alt="Ahri"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c2" href="/champions/annie">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Annie.png" alt="Annie"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c1" href="/champions/caitlyn">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Caitlyn.png" alt="Caitlyn"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c2" href="/champions/darius">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Darius.png" alt="Darius"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c1" href="/champions/fiora">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Fiora.png" alt="Fiora"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c1" href="/champions/graves">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Graves.png" alt="Graves"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c1" href="/champions/jarvan_iv">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/JarvanIV.png" alt="Jarvan IV"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c3" href="/champions/karma">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Karma.png" alt="Karma"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c3" href="/champions/kassadin">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Kassadin.png" alt="Kassadin"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c1" href="/champions/leona">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Leona.png" alt="Leona"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c2" href="/champions/mordekaiser">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Mordekaiser.png" alt="Mordekaiser"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c2" href="/champions/sona">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Sona.png" alt="Sona"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c2" href="/champions/yasuo">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Yasuo.png" alt="Yasuo"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
            </div>
          </div>
          <div class="tier-group">
            <div class="characters-categoryfive">
              <h3>D</h3>
            </div>
            <div class="characters-list">
              <a class="characters-item c1" href="/champions/khazix">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Khazix.png" alt="Khazix"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c1" href="/champions/malphite">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Malphite.png" alt="Malphite"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c1" href="/champions/poppy">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Poppy.png" alt="Poppy"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c1" href="/champions/twisted_fate">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/TwistedFate.png" alt="Twisted Fate"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
            </div>
          </div>
          <div class="tier-group">
            <div class="characters-categorysix">
              <h3>E</h3>
            </div>
            <div class="characters-list">
              <a data-toggle="tooltip" title="Some tooltip text!" data-placement="right" class="characters-item c1"
                href="/champions/xayah">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Xayah.png" alt="Xayah"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c1" href="/champions/ziggs">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Ziggs.png" alt="Ziggs"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
              <a class="characters-item c1" href="/champions/zoe">
                <div class="character-wrapper"><img class="character-icon"
                    src="https://rerollcdn.com/characters/Skin/3/Zoe.png" alt="Zoe"></div>
                <div class="row popup-info">
                  <div class="col-md-3 col-3 info">
                    <img src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                    <p>Irelia</p>
                  </div>
                  <div class="col-md-7 col-7 origin-wrap">
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
                      <p>Cybernetic</p>
                    </div>
                    <div class="d-flex  origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
                      <p>Blademaster</p>
                    </div>
                    <div class="d-flex origin">
                      <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
                      <p>Mana-Reaver</p>
                    </div>
                  </div>
                  <div class="col-md-2 col-2 cost">
                    <img src="http://127.0.0.1:8000/images/icon-gold.svg">
                    <div>4</div>
                  </div>
                  <div class="col-md-12 item">
                    <div>Item:</div>
                    <img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster">
                    <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png"
                      alt="Guardian Angel">
                    <img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge">

                  </div>

                </div>
              </a>
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