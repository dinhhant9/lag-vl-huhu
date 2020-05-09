@extends('layouts.master')

{{-- Tiêu đề của trang --}}

@section('title')
Danh Sách Hệ
@endsection

{{-- Thẻ meta của trang --}}

@section('meta')
<meta name="description" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:title" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:description" content="Chiến đấu vì vinh quang">
<meta property="og:image" content="https://lienminh.garena.vn/images/Lan_h3lpm3/06_2019/DCTL/bg-hero.jpg">
@endsection
@section('css')
<link href="{{ asset('css/chitiettuong.css') }}" rel="stylesheet">
{{-- Nội dung của trang --}}
@endsection
@section('content')

<div class="container overrall">
    <div class="row m-0">
        <div class="col-12 col-lg-4 sidebar">
            <div class="character-protrait">
                <div class="character-wrapper">
                    <img class="character-image" src="https://rerollcdn.com/characters/Skin/3/Irelia.png" alt="Irelia">
                </div>
                <div class="character-name mt-2">
                    <p>TFT Irelia</p>
                </div>

            </div>
            <div class="character-item mb-5">
                <div class="character-header">
                    <span class="name">Item Build</span>
                </div>
                <div class="divider"></div>
                <div class="item-list">
                <a class="characters-item" href="/item-builder"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster"></div>
                   <!-- star-popup-->
                    <div class=" row popup ">
                        <div class="d-flex popup-header pb-2 pt-2">
                            <div class="popup-image"><img class="character-icon" src="https://rerollcdn.com/items/Bloodthirster.png" alt="Bloodthirster"></div>
                            <div class="popup-intensty ml-3">
                            <div><span>Bloodthirster</span></div>
                            <div class="d-flex">
                                <div class="mr-2"><img class="item-stat-icon" src="https://rerollcdn.com/ui/icon-ad.svg" alt="ad">
                                +15</div>
                                <div><img class="item-stat-icon" src="https://rerollcdn.com/ui/icon-mr.svg" alt="mr">+25</div>
                                </div>
                            </div>    
                        </div>
                        <div class=" popup-function pb-2 pt-2">
                            <span> Bacsic Attacks Head The Wearer For 35% of the damage dealt</span>
                        </div>
                        <div class="d-flex popup-recipe pb-2 pt-2">
                            <div class="recipe">
                                <span>Recipe :</span>
                            </div>
                            <div class="item pl-3">
                            <img class="character-icon pr-1" src="https://rerollcdn.com/items/BFSword.png" alt="B.F. Sword">
                            <img class="character-icon" src="https://rerollcdn.com/items/NegatronCloak.png" alt="Negatron Cloak">
                            </div>
                        </div>

                    </div>
                </a>
                <a class="characters-item" href="/item-builder"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png" alt="Guardian Angel"></div>
                <div class=" row popup ">
                        <div class="d-flex popup-header pb-2 pt-2">
                            <div class="popup-image"><img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png" alt="Guardian Angel"></div>
                            <div class="popup-intensty ml-3">
                            <div><span>Guardian Angel</span></div>
                            <div class="d-flex">
                                <div class="mr-2"><img class="item-stat-icon" src="https://rerollcdn.com/ui/icon-ad.svg" alt="ad">
                                +15</div>
                                <div><img class="item-stat-icon" src="https://rerollcdn.com/ui/icon-ar.svg" alt="ar">+25</div>
                                </div>
                            </div>    
                        </div>
                        <div class=" popup-function pb-2 pt-2">
                            <span>Wearer Revies With 400ph</span>
                        </div>
                        <div class="d-flex popup-recipe pb-2 pt-2">
                            <div class="recipe">
                                <span>Recipe :</span>
                            </div>
                            <div class="item pl-3">
                            <img class="character-icon" src="https://rerollcdn.com/items/BFSword.png" alt="B.F. Sword">
                            <img class="character-icon" src="https://rerollcdn.com/items/ChainVest.png" alt="Chain Vest">
                            </div>
                        </div>

                    </div>
                </a>
                <a class="characters-item" href="/item-builder"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge"></div>
                <div class=" row popup ">
                        <div class="d-flex popup-header pb-2 pt-2">
                            <div class="popup-image"><img class="character-icon" src="https://rerollcdn.com/items/InfinityEdge.png" alt="Infinity Edge"></div>
                            <div class="popup-intensty ml-3">
                            <div><span>Infinity Edge</span></div>
                            <div class="d-flex">
                                <div class="mr-2"><img class="item-stat-icon" src="https://rerollcdn.com/ui/icon-ad.svg" alt="ad">
                                +15</div>
                                <div><img class="item-stat-icon" src="https://rerollcdn.com/ui/icon-cr.svg" alt="cr">%20</div>
                                </div>
                            </div>    
                        </div>
                        <div class=" popup-function pb-2 pt-2">
                            <span>100% Critical strike damaghe.</span>
                        </div>
                        <div class="d-flex popup-recipe pb-2 pt-2">
                            <div class="recipe">
                                <span>Recipe :</span>
                            </div>
                            <div class="item pl-3">
                            <img class="character-icon" src="https://rerollcdn.com/items/BFSword.png" alt="B.F. Sword">
                            <img class="character-icon" src="https://rerollcdn.com/items/SparringGloves.png" alt="Sparring Gloves">
                            </div>
                        </div>

                    </div>
                </a>
                </div>

            </div>
            <div class="character-stast">
                <div class="stast-header"><span>Stats</span></div>
                <div class="divider"></div>
                <ul class="navbar-nav stast-list">
                    <li class="nav-item mb-3"><span class="bold">Cost: </span>
                    <img class="gold-icon" src="https://rerollcdn.com/ui/icon-gold.svg" alt="cost">
                    4
                    </li>
                    <li class="nav-item mb-3 "><span class="bold">Health: </span>800 / 1440 / 2592</li>
                    <li class="nav-item mb-3"><span class="bold">Mana: </span>30</li>
                    <li class="nav-item mb-3"><span class="bold">Armor: </span>35</li>
                    <li class="nav-item mb-3"><span class="bold">MR: </span>20</li>
                    <li class="nav-item mb-3"><span class="bold">DPS: </span>60 / 107 / 193</li>
                    <li class="nav-item mb-3"><span class="bold">Damage: </span>70 /126 / 227 </li>
                    <li class="nav-item mb-3"><span class="bold">Atk Spd: </span>0.85</li>
                    <li class="nav-item mb-3"><span class="bold">Crit Rate: </span>25%</li>
                    <li class="nav-item mb-3"><span class="bold">Range: </span>1</li>
                </ul>


            </div>
        </div>
        <div class="col-12 col-lg-8 main">
            <div class="character-header m-0">
                <span class="name">Abilitis</span>
            </div>
            <div class="divider"></div>
            <div class="d-flex character-ability ">
                <img class=" ability-image" src="https://rerollcdn.com/abilities/3/irelia-bladesurge.png" alt="Bladesurge">
                <div class=" ability-description ml-5 ">
                    <div class="descriptiton-header">
                        <div class=" descriptiton-name">
                            <b>Bladesurge</b>
                            <p class="mt-2">Active</p>
                        </div>
                        <div class=" ability-descriptiton-cost">
                            <img src="https://rerollcdn.com/ui/icon-mana.svg" alt="mana cost">
                            <span style="font-size: 14px">
                                <b>0</b>
                                /30
                            </span>
                        </div>
                    </div>
                    <div class="mb-4 alibity-bonus">
                        <p>Irelia dashes past her target, attacking them for a percentage of her Attack Damage as she passes through. If this kills the target, she casts again immediately at the enemy with the highest mana.</p>
                    </div>
                    <ul class="navbar-nav mb-4 ability-list">
                        <li class="nav-item"><span class="bold">Percent of Attack Damage: </span>175% / 250% / 500%</li>
                    </ul>
                </div>
        </div>
        <div class="divider"></div>
        <div class="d-flex character-ability">
            <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
            <div class=" ability-description ml-5">
                        <div class="descriptiton-header">
                            <div class=" descriptiton-name">
                                <b>Cybernetic</b>
                                <p class="mt-2">Origin</p>
                            </div>                          
                        </div>
                        <div class="mb-4 alibity-bonus">
                            <p>Cybernetic champions with at least one item gain Health and Attack Damage.</p>
                        </div>
                        <div class="d-flex mb-4 alibity-bonus">
                            <div class="ability-count">3</div>
                            <div class="ability-bonus-value">350 Health & 35 Attack Damage</div>
                        </div>
                        <div class="d-flex mb-4 alibity-bonus">
                            <div class="ability-count">6</div>
                            <div class="ability-bonus-value">3700 Health & 70 Attack Damage</div>
                        </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="d-flex character-ability">
        <img class="misc-image" src="https://rerollcdn.com/icons/blademaster.png" alt="Blademaster">
            <div class=" ability-description ml-5">
                        <div class="descriptiton-header">
                            <div class=" descriptiton-name">
                                <b>Blademaster</b>
                                <p class="mt-2">Class</p>
                            </div>                          
                        </div>
                        <div class="mb-4 alibity-bonus">
                            <p>Blademasters' Basic Attacks have a chance on hit to trigger two additional attacks against their target. These additional attacks deal damage like Basic Attacks and trigger on-hit effects.</p>
                        </div>
                        <div class="d-flex mb-4 alibity-bonus">
                            <div class="ability-count">3</div>
                            <div class="ability-bonus-value">30% Chance to trigger</div>
                        </div>
                        <div class="d-flex mb-4 alibity-bonus">
                            <div class="ability-count">6</div>
                            <div class="ability-bonus-value">55% Chance to trigger</div>
                        </div>
                        <div class="d-flex mb-4 alibity-bonus">
                            <div class="ability-count">9</div>
                            <div class="ability-bonus-value">100% Chance to trigger</div>
                        </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="d-flex character-ability">
        <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
            <div class=" ability-description ml-5">
                        <div class="descriptiton-header">
                            <div class=" descriptiton-name">
                                <b>Mana-Reaver</b>
                                <p class="mt-2">Class</p>
                            </div>                          
                        </div>                    
                        <div class="d-flex mb-4 alibity-bonus">
                            <div class="ability-count">2</div>
                            <div class="ability-bonus-value">Mana-Reaver's Basic Attacks increase the Mana cost of their target's next spellcast by 40%.</div>
                        </div>                       
            </div>
        
        </div>
        <div class="character-header">
            <span class="name">Synergies</span>
        </div>
        <div class="divider"></div>
        <div class="d-flex synergy-list">
        <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
        <div class="d-flex character-list">
        <a class="characters-item c5" href="/champions/ekko"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Ekko.png" alt="Ekko"></div>
        <div class="row popup-info">
                  <div class="col-md-3 col-3 info p-0 d-flex">
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
        <a class="characters-item c1" href="/champions/fiora"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Fiora.png" alt="Fiora"></div>
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
        <a class="characters-item c1" href="/champions/leona"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Leona.png" alt="Leona"></div>
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
                <a class="characters-item c2 n01" href="/champions/lucian"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Lucian.png" alt="Lucian"></div>
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
            <a class="characters-item c3" href="/champions/vi"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Vi.png" alt="Vi"></div>
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
        </div>
        
    </div>
    <div class="d-flex synergy-list">
    <img class="misc-image" src="https://rerollcdn.com/icons/mana-reaver.png" alt="Mana-Reaver">
    <div class="d-flex character-list">
    <a class="characters-item c2" href="/champions/darius"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Darius.png" alt="Darius"></div>
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
    <a class="characters-item c3" href="/champions/kassadin"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Kassadin.png" alt="Kassadin"></div>
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
    <a class="characters-item c5" href="/champions/thresh"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Thresh.png" alt="Thresh"></div>
    <div class="row popup-info">
                  <div class="col-md-3 col-3 info p-0 d-flex">
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
    <div class="d-flex synergy-list">
        <img class="misc-image" src="https://rerollcdn.com/icons/cybernetic.png" alt="Cybernetic">
        <div class="d-flex character-list">
        <a class="characters-item c1" href="/champions/fiora"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Fiora.png" alt="Fiora"></div>
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
        <a class="characters-item c4" href="/champions/kayle"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Kayle.png" alt="Kayle"></div>          <div class="row popup-info">
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
        <a class="characters-item c3" href="/champions/master_yi"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/MasterYi.png" alt="Master Yi"></div>
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
        <a class="characters-item c2 n01 " href="/champions/shen"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Shen.png" alt="Shen"></div>
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
        </a>
        <a class="characters-item c1" href="/champions/xayah"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Xayah.png" alt="Xayah"></div>
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
        <a class="characters-item c2" href="/champions/yasuo"><div class="character-wrapper"><img class="character-icon" src="https://rerollcdn.com/characters/Skin/3/Yasuo.png" alt="Yasuo"></div>
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
</div>


@endsection