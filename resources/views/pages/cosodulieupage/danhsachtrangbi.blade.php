@extends('layouts.master')

{{-- Tiêu đề của trang --}}

@section('title')
Danh Sách Trang Bị
@endsection

{{-- Thẻ meta của trang --}}

@section('meta')
<meta name="description" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:title" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:description" content="Chiến đấu vì vinh quang">
<meta property="og:image" content="https://lienminh.garena.vn/images/Lan_h3lpm3/06_2019/DCTL/bg-hero.jpg">
@endsection
@section('css')
<link href="{{ asset('css/danhsachtrangbi.css') }}" rel="stylesheet">

{{-- Nội dung của trang --}}
@endsection
@section('content')
<div class="row wrap-tab ">
    @include ('pages.cosodulieupage.menu')
    <div class="main">
            <div class="page-header">
                    <h3>TFT  Item Tier List</h3>
                    <div class="seachbar">
                    <img class="searchbar-icon" src="https://rerollcdn.com/search-icon.svg" alt="search icon">
                    <input type="text" placeholder="Seach...">

                    </div>
            </div>
            <div class="divider"></div>
            <div class="update mb-3">
                <div class="update-patch">
                    <h6 class="m-0" >Patch 10.10</h6>
                </div>
                <div class="legend d-flex">
                    <div class="legend-item">
                        <h6 class="m-0">Tier Up</h6>
                    </div>
                    <div class="legend-item">
                        <h6 class="m-0">Tier Down</h6>
                    </div>

                </div>
            </div>
            <div class="tier-ground mb-3">
                <div class="character-categorytone ">
                    <h3>S</h3>
                </div>
               
                
                    <div class="character-list">
                        @for ($j = 0; $j < 10; $j++)      
                        <div class="character no-collapsable">                                  
                                <div class="character-image">
                                <img class="character-icon" src="https://rerollcdn.com/items/Spatula.png" alt="Spatula">
                                </div>
                        <!-- start popup  -->
                                <div class="row character-popup"> 
                                    <div class="col-md-3 col-3 character-info">
                                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                                        <p>Ekko</p>
                                    </div>
                                    <div class="col-md-7 col-7 charactor-origin-wrap">
                                        <div class="charactor-origin">
                                            <img src="{{ asset('images/origin/cybernetic.png') }}" />
                                            <p>Siêu Công Nghệ</p>
                                        </div>
                                        <div class="charactor-origin">
                                            <img src="{{ asset('images/origin/infiltrator.png') }}" />
                                            <p>Mật Thám</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-2 charactor-cost">
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
            <div class="tier-ground mb-3">
                <div class="character-categorytthree ">
                    <h3>A</h3>
                </div>
                <div class="character-list">
                        @for ($j = 0; $j < 10; $j++)      
                        <div class="character no-collapsable">                                  
                                <div class="character-image">
                                <img class="character-icon" src="https://rerollcdn.com/items/Spatula.png" alt="Spatula">
                                </div>
                        <!-- start popup  -->
                                <div class="row character-popup"> 
                                    <div class="col-md-3 col-3 character-info">
                                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                                        <p>Ekko</p>
                                    </div>
                                    <div class="col-md-7 col-7 charactor-origin-wrap">
                                        <div class="charactor-origin">
                                            <img src="{{ asset('images/origin/cybernetic.png') }}" />
                                            <p>Siêu Công Nghệ</p>
                                        </div>
                                        <div class="charactor-origin">
                                            <img src="{{ asset('images/origin/infiltrator.png') }}" />
                                            <p>Mật Thám</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-2 charactor-cost">
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
    
    <div class="tier-ground mb-3">
                <div class="character-categoryttow">
                    <h3>B</h3>
                </div>
                <div class="character-list">
                        @for ($j = 0; $j < 10; $j++)      
                        <div class="character no-collapsable">                                  
                                <div class="character-image">
                                <img class="character-icon" src="https://rerollcdn.com/items/Spatula.png" alt="Spatula">
                                </div>
                        <!-- start popup  -->
                                <div class="row character-popup"> 
                                    <div class="col-md-3 col-3 character-info">
                                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                                        <p>Ekko</p>
                                    </div>
                                    <div class="col-md-7 col-7 charactor-origin-wrap">
                                        <div class="charactor-origin">
                                            <img src="{{ asset('images/origin/cybernetic.png') }}" />
                                            <p>Siêu Công Nghệ</p>
                                        </div>
                                        <div class="charactor-origin">
                                            <img src="{{ asset('images/origin/infiltrator.png') }}" />
                                            <p>Mật Thám</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-2 charactor-cost">
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
    <div class="tier-ground mb-3">
                <div class="character-categorytfour">
                    <h3>C</h3>
                </div>
                <div class="character-list">
                        @for ($j = 0; $j < 10; $j++)      
                        <div class="character no-collapsable">                                  
                                <div class="character-image">
                                <img class="character-icon" src="https://rerollcdn.com/items/Spatula.png" alt="Spatula">
                                </div>
                        <!-- start popup  -->
                                <div class="row character-popup"> 
                                    <div class="col-md-3 col-3 character-info">
                                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                                        <p>Ekko</p>
                                    </div>
                                    <div class="col-md-7 col-7 charactor-origin-wrap">
                                        <div class="charactor-origin">
                                            <img src="{{ asset('images/origin/cybernetic.png') }}" />
                                            <p>Siêu Công Nghệ</p>
                                        </div>
                                        <div class="charactor-origin">
                                            <img src="{{ asset('images/origin/infiltrator.png') }}" />
                                            <p>Mật Thám</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-2 charactor-cost">
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
    <div class="tier-ground mb-3">
                <div class="character-categorytfive">
                    <h3>D</h3>
                </div>
                <div class="character-list">
                        @for ($j = 0; $j < 10; $j++)      
                        <div class="character no-collapsable">                                  
                                <div class="character-image">
                                <img class="character-icon" src="https://rerollcdn.com/items/Spatula.png" alt="Spatula">
                                </div>
                        <!-- start popup  -->
                                <div class="row character-popup"> 
                                    <div class="col-md-3 col-3 character-info">
                                        <img src="{{ asset('images/champions/Ekko.png') }}" />
                                        <p>Ekko</p>
                                    </div>
                                    <div class="col-md-7 col-7 charactor-origin-wrap">
                                        <div class="charactor-origin">
                                            <img src="{{ asset('images/origin/cybernetic.png') }}" />
                                            <p>Siêu Công Nghệ</p>
                                        </div>
                                        <div class="charactor-origin">
                                            <img src="{{ asset('images/origin/infiltrator.png') }}" />
                                            <p>Mật Thám</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-2 charactor-cost">
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



@endsection