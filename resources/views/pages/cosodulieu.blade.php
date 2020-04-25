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
@endsection
@section('jsCoSoDuLieu')
<script src="{{ asset('js/cosodulieu.js') }}" rel="stylesheet"></script>
<!-- @endsection -->
@section('content')

<div class="row wrap-tab">
    <div class="tab">
        <a class="tablinks" onclick="openCity(event, 'champions')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Danh sách tướng
        </a>
        <a class="tablinks" onclick="openCity(event, 'items')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Danh sách trang bị
        </a>
        <a class="tablinks" onclick="openCity(event, 'itembuilder')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Cách ghép đồ
        </a>
        <a class="tablinks" onclick="openCity(event, 'origins')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Tộc
        </a>
        <a class="tablinks" onclick="openCity(event, 'classes')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Hệ
        </a>
    </div>

    <!-- item builder tab content  -->
    <div id="itembuilder" class="tabcontent">
        <div class="container mt-3">
            <h2>Toggleable Tabs</h2>
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Base Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">Combinded Items</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- baseitem tab  -->
                <div id="home" class="container tab-pane active"><br>
                    <div class="wrap-combinded-items">
                        <h2>Filterable Table</h2>
                        <p>
                            Type something in the input field to search the table for first names, last names or emails:
                        </p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Bouns</th>
                                    <th>Recipe</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @for($j=0; $j < 10; $j++) <tr>
                                    <td>
                                        <div class="wrap-item-combinded">
                                            <img src="{{ asset('images/items/NeedlesslyLargeRod.png') }}" />
                                            <div class="item-name">Mũ phù thủy Rabadon</div>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="wrap-item-combinded">
                                            <div>Sát thương kỹ năng mạnh hơn 50% từ mọi nguồn.</div>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="wrap-item-base">
                                            <img src="{{ asset('images/items/RabadonsDeathcap.png') }}" />
                                            <img src="{{ asset('images/items/RabadonsDeathcap.png') }}" />
                                        </div>
                                    </td>
                                    </tr>
                                    @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end baseitem tab  -->

                <div id="menu1" class="container tab-pane fade"><br>
                    <div class="wrap-combinded-items">
                        <h2>Filterable Table</h2>
                        <p>Type something in the input field to search the table for first names, last names or emails:
                        </p>
                        <input class="form-control" id="myInput" type="text" placeholder="Search..">
                        <br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Bouns</th>
                                    <th>Recipe</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @for($j=0; $j < 25; $j++) <tr>
                                    <td>
                                        <div class="wrap-item-combinded">
                                            <img src="{{ asset('images/items/RabadonsDeathcap.png') }}" />
                                            <div class="item-name">Mũ phù thủy Rabadon</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="wrap-item-combinded">
                                            <div>Sát thương kỹ năng mạnh hơn 50% từ mọi nguồn.</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="wrap-item-base">
                                            <img src="{{ asset('images/items/NeedlesslyLargeRod.png') }}" />
                                            <img src="{{ asset('images/items/NeedlesslyLargeRod.png') }}" />
                                        </div>
                                    </td>
                                    </tr>
                                    @endfor
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end item builder tab content  -->

    <!-- origins tab content  -->
    <div id="origins" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
    </div>
    <!-- end origins tab content  -->

    <!-- classes tab content  -->
    <div id="classes" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
    </div>
    <!-- end classes tab content  -->

    <!-- champions tab content  -->
    <div id="champions" class="tabcontent">
        <h2>TFT Champions - Set 3</h2>
        <div class="wrap-champions">
            @for ($j = 0; $j
            < 30; $j++) <img src="{{ asset('images/champions/Ekko.png') }}" />
            @endfor
        </div>
    </div>
    <!-- end champions tab content  -->

    <!-- item list tab content  -->
    <div id="items" class="tabcontent">
        <h2>TFT Items - Set 3</h2>
        <div class="wrap-items">
            <div class="base-items">
                <h4>Base Items</h4>
                <div class="list-base-items row">
                    @for ($j = 0; $j < 10; $j++) <div class="wrap-item">
                        <img class="image-base-items" src="{{ asset('images/items/GuardianAngel.png') }}" />
                        <!-- popup-info  -->
                        <div class="popup-base-item">
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
                @endfor
            </div>
        </div>
        <div class="base-items">
            <h4>Combinded Items</h4>
            <div class="list-base-items row">
                @for ($j = 0; $j < 30; $j++) <div class="wrap-item">
                    <img class="image-base-items" src="{{ asset('images/items/GuardianAngel.png') }}" />
                    <!-- popup-info  -->
                    <div class="popup-base-item">
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
                                Recipe:
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
        </div>
    </div>
</div>
<!-- end item list tab content  -->
</div>
@endsection