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
    <div style="padding: 25px 20px;">
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

            <div class="characters-list">
            @component('components.popup.tuong')
            @endcomponent 
              <a class="characters-item c4" href="chi-tiet-tuong">
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
              <a class="characters-item c4" href="chi-tiet-tuong">
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
              <a class="characters-item c5" href="chi-tiet-tuong">
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
              <a class="characters-item c5" href="chi-tiet-tuong">
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
              <a class="characters-item c3" href="chi-tiet-tuong">
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
              <a class="characters-item c4" href="chi-tiet-tuong">
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
              <a class="characters-item c5" href="chi-tiet-tuong">
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
              <a class="characters-item c4" href="chi-tiet-tuong">
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
              <a class="characters-item c5" href="chi-tiet-tuong">
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
              <a class="characters-item c4 up" href="chi-tiet-tuong">
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
              <a class="characters-item c2" href="chi-tiet-tuong">
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
              <a class="characters-item c2" href="chi-tiet-tuong">
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
              <a class="characters-item c3" href="chi-tiet-tuong">
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
              <a class="characters-item c3 down" href="chi-tiet-tuong">
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
              <a class="characters-item c3" href="chi-tiet-tuong">
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
              <a class="characters-item c5" href="chi-tiet-tuong">
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
              <a class="characters-item c4" href="chi-tiet-tuong">
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
              <a class="characters-item c5" href="chi-tiet-tuong">
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
              <a class="characters-item c5" href="chi-tiet-tuong">
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
              <a class="characters-item c2" href="chi-tiet-tuong">
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
              <a class="characters-item c3" href="chi-tiet-tuong">
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
              <a class="characters-item c3" href="chi-tiet-tuong">
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
              <a class="characters-item c3" href="chi-tiet-tuong">
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
              <a class="characters-item c3" href="chi-tiet-tuong">
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
              <a class="characters-item c3" href="chi-tiet-tuong">
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
              <a class="characters-item c2 down" href="chi-tiet-tuong">
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
              <a class="characters-item c2" href="chi-tiet-tuong">
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
              <a class="characters-item c4" href="chi-tiet-tuong">
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
              <a class="characters-item c3" href="chi-tiet-tuong">
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
              <a class="characters-item c4 down" href="chi-tiet-tuong">
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
              <a class="characters-item c2" href="chi-tiet-tuong">
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
              <a class="characters-item c2" href="chi-tiet-tuong">
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
              <a class="characters-item c2" href="chi-tiet-tuong">
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
              <a class="characters-item c1" href="chi-tiet-tuong">
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
              <a class="characters-item c2" href="chi-tiet-tuong">
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
              <a class="characters-item c1" href="chi-tiet-tuong">
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
              <a class="characters-item c1" href="chi-tiet-tuong">
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
              <a class="characters-item c1" href="chi-tiet-tuong">
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
              <a class="characters-item c3" href="chi-tiet-tuong">
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
              <a class="characters-item c3" href="chi-tiet-tuong">
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
              <a class="characters-item c1" href="chi-tiet-tuong">
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
              <a class="characters-item c2" href="chi-tiet-tuong">
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
              <a class="characters-item c2" href="chi-tiet-tuong">
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
              <a class="characters-item c2" href="chi-tiet-tuong">
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
              <a class="characters-item c1" href="chi-tiet-tuong">
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
              <a class="characters-item c1" href="chi-tiet-tuong">
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
              <a class="characters-item c1" href="chi-tiet-tuong">
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
              <a class="characters-item c1" href="chi-tiet-tuong">
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
                href="chi-tiet-tuong">
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
              <a class="characters-item c1" href="chi-tiet-tuong">
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
              <a class="characters-item c1" href="chi-tiet-tuong">
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