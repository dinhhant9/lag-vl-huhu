@extends('layouts.master')

{{-- Tiêu đề của trang --}}

@section('title')
Chi Tiết Bản Cập Nhật
@endsection

{{-- Thẻ meta của trang --}}

@section('meta')
<meta name="description" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
  <meta property="og:title" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
  <meta property="og:description" content="Chiến đấu vì vinh quang">
  <meta property="og:image" content="https://lienminh.garena.vn/images/Lan_h3lpm3/06_2019/DCTL/bg-hero.jpg">
@endsection

@section('css')
<link href="{{ asset('css/chitietbancapnhat.css') }}" rel="stylesheet">
@endsection

{{-- Nội dung của trang --}}

@section('content')

  <div>
    <div class="row container">
      <div class="col-lg-4">
        <h3>Log</h3>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active " id="v-pills-home-tab active" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home " aria-selected="true">Patch 10.8b</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Patch 10.8</a>

        </div>
      </div>
    <div class="col-lg-8 main">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div class="bage-header">
                    <h4>TFT Patch Notes</h4>
                    <p>Patch 10.8b</p>
                  </div>
                  <div class="sub-bage">
                    <h5>April 21,2020</h5>
                    <h4>Mid-Patch Updates</h4>
                    <hr>
                    <h6>Balance Changes</h6>
                    <ul class="menu">
                      <li>Dark Star Bonus Attack Damage and Ability Power: 25/35/45 ⇒ 25/30/35</li>
                      <li>Shaco Attack Damage: 50 ⇒ 70</li>
                      <li>Shaco Starting/Total Mana: 0/60 ⇒ 30/80</li>
                      <li>Shaco Spell Power: 300/325/350% ⇒ 200/225/250%</li>
                      <li>Syndra Total Mana: 50 ⇒ 65</li>
                    </ul>
                    <h6>Bugfixes</h6>
                    <ul class="menu">
                      <li>Fixed all the bugs that came about when Kayn spawned with a Force of Nature.</li>
                      <li>Fixed a bug where Xerath could cast his spell while reviving from Guardian Angel.</li>
                    </ul>
                  
                  </div>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="bage-header1">
                                <h4>TFT Patch Notes</h4>
                                <p>Patch 10.8b</p>
                    </div>
                    <div class="sub-bage1">
                    <h5>April 15,2020</h5>
                    <h4>New</h4>
                    <hr>
                    <h6>Xerath</h6>
                    <ul class="menu">
                      <li>Tier 5</li>
                      <li>Origin: Dark Star</li>
                      <li>Class: Sorcerer</li>
                      <li>Health: 750/1350/2430</li>
                      <li>Armor: 20</li>
                      <li>Attack Damage: 60/108/194</li>
                      <li>Attack Speed: 0.9</li>
                      <li>Mana: 30/80</li>
                      <li class="sub">Abyssal Bombardment: Xerath transforms, summoning meteors to strike random foes in place of his normal attacks for 6/8/45 seconds. Meteors deal 300/400/2500 magic damage upon impact and if they kill their target, all adjacent enemies take 150/200/1250 magic damage and are stunned for 1.5 seconds.</li>
                    </ul>
                    <h4 class="SYSTEMS">SYSTEMS</h4>
                    <hr>
                    <h6>New Galaxies Mechanics</h6>
                    <ul class="menu">
                      <li>Trade Sector: Players get one free reroll in each round.</li>
                      <li>Superdense Galaxy: Upon reaching level 5, players receive a free Force of Nature.</li>
                      <li class="sub1">There's now about a 50% chance of getting a special Galaxy vs. Normal game with Trade Sector and Superdense Galaxies a tad more favored than the others.</li>
                    </ul>
                      <h6>New Galaxies Mechanics</h6>
                      <p>
                      Developer's Notes: We're making it more difficult to purposely loss-streak/open-fort as it will now risk being eliminated before stage 4-7. We still think loss-streaking should still be a strategy and especially a fallback for unlucky early shop rolls or slow compositions, but they should be actively trying to lose by small margins rather than happily full-on open-forting.
                      </p>  
                      <ul class="menu">
                        <li>Win and Loss Streaks: 2(1g)/3(2g)/4+(3g) ⇒ 2-3(1g)/4(2g)/5+(3g)</li>
                        <li>Base Damage per Stage: 0/3/4/5/10/15/20 ⇒ 0/0/1/2/5/10/15</li>
                        <li>Total Damage based on the number of surviving units: 1/2/3/4/5/6/7/8/9/10... ⇒ 2/4/6/8/10/11/12/13/14/15…</li>
                        <li>ntroduced new carousel variations, keep an eye out.</li>
                      </ul>
                      <h4 class="traits">Traits</h4>
                      <hr>
                      <ul class="menu">
                        <li>(New) 9 Blademaster: 100% chance to proc</li>
                        <li>(New) 9 Dark Star: 45 Attack Damage & Spell Power</li>
                        <li>(New) 6 Infiltrator: 125% Bonus Attack Speed</li>
                        <li>(New) 6 Protector: 45% Max Health Shield</li>
                        <li>(New) 9 Rebel: 350 Shield and 15% Damage per Rebel</li>
                        <li>(New) 8 Sorcerer: +125 Spell Power to team</li>
                        <li>Celestial Heal %: 15/30/60 ⇒ 15/40/65</li>
                        <li>Cybernetic Health/Attack Damage (6): 800&80 ⇒ 750&75</li>
                        <li>Mech-Pilot Super Mech Health: 100% of Pilots Health ⇒ 1800 + 50% of Pilots Health</li>
                        <li>Mech-Pilot Super Mech Spell Damage: 400/500/600/700/900/1500/5000 ⇒ 400/500/600/700/800/1200/5000</li>
                        <li>Mercenary: Added visualization to indicate purchased Mercenary upgrades.</li>
                        <li>Space Pirate (4) Item Drop Chance: 15% ⇒ 20%</li> 
                      </ul>
                      <h4 class="Champions">Champions</h4>
                      <hr>
                      <h6>Tier 1 Champions</h6>
                      <ul class="menu">
                        <li>Caitlyn Ace in the Hole Damage: 700/1000/1800 ⇒ 750/1500/3000</li>
                        <li>Xayah Deadly Plumage Attack Speed Buff: 75%/100%/150% ⇒ 100%/125%/150%</li>
                        <li>Zoe Stun Duration: 2/2.5/3 ⇒ 2/2.5/4</li>
                        <li>Zoe Sleepy Trouble Bubble Damage: 150/225/400 ⇒ 200/275/400</li>
                      </ul>
                      <h6>Tier 2 Champions</h6>
                      <ul class="menu">
                        <li>Annie Armor: 35 ⇒ 40</li>
                        <li>Annie Galaxy Shield-Blast Shield: 225/300/450 ⇒ 270/360/540</li>
                        <li>Darius Mana: 0/70 ⇒ 0/60</li>
                        <li>Lucian Attack Damage: 55 ⇒ 50</li>
                        <li>Rakan Grand Entrance Targeting: Attack Target ⇒ Furthest Enemy within 3 Hexes</li>
                        <li>Rakan Grand Entrance Knock-up Radius: 2 ⇒ 1</li>
                        <li>Rakan Total Mana: 150 ⇒ 100</li>
                        <li>Rakan Mana: 50/150 ⇒ 50/80</li>
                        <li>Shen Health: 700 ⇒ 800</li>
                        <li>Shen Future's Refuge Dodge Duration: 2.5/3/4 ⇒ 2.5/3/5</li>
                      </ul>
                      <h6>Tier 3 Champions</h6>
                      <ul class="menu">
                      <li>Shaco Attack Damage: 55 ⇒ 50</li>
                      <li>Shaco Deceive Damage (% of Attack Damage): 250%/325%/400% ⇒ 300%/325%/350%</li>
                      <li>Syndra Range: 660 ⇒ 890</li>
                      <li>Syndra Unleashed Power Damage (per orb): 80/120/200 ⇒ 80/120/250</li>
                      </ul>
                      <h6>Tier 4 Champions</h6>
                      <ul class="menu">
                        <li>Fizz Health: 650 ⇒ 600</li>
                        <li>Fizz Attack Speed: 0.7 ⇒ 0.8</li>
                        <li>Jinx Attack Speed: 0.7 ⇒ 0.75</li>
                        <li>Soraka Health: 650 ⇒ 700</li>
                        <li>Soraka Wish Healing: 350/500/2000 ⇒ 375/550/20000</li>
                        <li>WuKong Cyclone Damage: 250/450/2000 ⇒ 300/500/4000</li>
                        <li>Vel’Koz Lifeform Disintegration Ray Duration: 2.5 ⇒ 2</li>
                        <li>Vel’Koz will now cast more efficiently on smaller groups of units.</li>
                      </ul>
                      <h6>Tier 5 Champions</h6>
                      <ul class="menu">
                        <li>Aurelion Sol Health: 950 ⇒ 1100</li>
                        <li>Aurelion Sol Armor: 30 ⇒ 35</li>
                      </ul>
                      <h4 class="Items">Items</h4>
                      <hr>
                      <h6>Tier 1 Champions</h6>
                      <ul class="menu">
                        <li>Chalice of Favor: Now also grants mana to holder</li>
                        <li>Deathblade Starting stacks: 2 ⇒ 0</li>
                        <li>Deathblade Attack Damage per stack: 15 ⇒ 30</li>
                        <li>Frozen Heart Attack Speed slow: 40% ⇒ 50%</li>
                        <li>Rapid Firecannon Bonus Range: 100% ⇒ 200%</li>
                        <li>Rapid Firecannon now displays a visual beam on attack when increasing the range of low range champions.</li>
                        <li>Shroud of Stillness Width: 1 Hex ⇒ 1.5 Hexes</li>
                        <li>Tear of the Goddess Mana: 20 ⇒ 15, All completed items adjusted accordingly.</li>
                        <li>Zeke’s Herald Range: 2 hexes ⇒ 1 hex</li>
                        <li>Zeke's Herald Attack Speed: 18% ⇒ 30%</li>
                        </ul>
                      <h4 class="Miscellaneous">Miscellaneous</h4>
                      <hr>
                      <ul class="menu">
                        <li>Shields in Overtime now have 66% reduced effectiveness (same as healing).</li>
                      </ul>
                      <h4 class="BugFixes">Bug Fixes</h4>
                      <hr>
                      <ul class="menu">
                        <li>Cybernetic (3) is now correctly a bronze level trait.</li>
                        <li>Mordekaiser’s tooltip now properly states that his shield lasts 8 seconds.</li>
                        <li>Fixed a bug where Wukong was not affecting enemies for the first 0.25 seconds of his spell</li>
                        <li>Fixed issues around the taunt voice lines Champions say when they win a combat. - Now only victorious and alive Champion taunts will be heard.</li>
                        <li>Adding additional Deathblades to a unit during combat will no longer reset all other Deathblade’s counters.</li>
                        <li>Fixed a bug where selling a Mech-Pilot while the trait was active would give you 0 gold.</li>
                        <li>Fixed a bug where the Super-Mech wasn’t benefiting from Infiltrator or - Demolitionist trait bonuses when on an Away board</li>
                        <li>Known issue: The Super-Mech still doesn’t benefit from team wide trait bonuses like Mystic when on an Away board</li>
                        <li>Fixed a bug where summoned units (ie: pulled in by Thresh, ZZ’Rot Portal) were contributing to player damage</li>
                        <li>Kayn spawns 2 rows closer - mobile players now can see what items he has!</li>
                      </ul>
                      <h4 class="MobileCorner">Mobile Corner</h4>
                      <hr>
                      <ul class="menu">
                        <li>Improvements to the Friends Panel that only the eagle-eye’d of you may notice.</li>
                        <li>Fixed a bug where some players needed to patch every time they restarted the app. That’s just silly.</li>
                        <li>When something has gone wrong and we need you to know about it you should now see a message about it. Hopefully you never do.</li>
                        <li>Fixed an issue where Egg Drop Tables failed their math exams and displayed the wrong numbers.</li>
                        <li>Checkmarks now appear in Loadouts when you are viewing a Little Legend or Arena skin you already have equipped.</li>
                        <li>We ordered the Little Legends under each species so you can find the perfect shade of Squink even quicker.</li>
                        <li>The UFO Sprite was getting a little uppity so we removed it’s star levels in Loadouts.</li>
                        <li>Emotes can now be placed in multiple slots. Your dreams of a full “Say that one more time.” emote wheel can now be realized.</li>
                        <li>Sometimes your currently equipped Little Legend and Arena Skin would forget to show up on entering loadouts. We reminded them what their jobs were.</li>
                        <li>Fixed several issues with aspect ratio & resolution resizing on some devices. - Feel free to fiddle away with your screen.</li>
                        <li>The login screen music and the home screen music were slightly out of key. We harmonized them.</li>
                        <li>Added beautiful delicious crispy sounds to the settings menu. Not sound settings. Sounds for the settings themselves.</li>

                      </ul>
                    </div>

      </div>
      </div>
    </div>
  </div>

@endsection