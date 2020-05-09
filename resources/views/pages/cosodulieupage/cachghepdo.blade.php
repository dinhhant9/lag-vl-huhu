@extends('layouts.master')

{{-- Tiêu đề của trang --}}

@section('title')
Cách ghép đồ
@endsection

{{-- Thẻ meta của trang --}}

@section('meta')
<meta name="description" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:title" content="Đấu Trường Chân Lý | Liên Minh Huyền Thoại">
<meta property="og:description" content="Chiến đấu vì vinh quang">
<meta property="og:image" content="https://lienminh.garena.vn/images/Lan_h3lpm3/06_2019/DCTL/bg-hero.jpg">
@endsection
@section('css')
<link href="{{ asset('css/cosodulieu.css') }}" rel="stylesheet">
{{-- Nội dung của trang --}}
@endsection
@section('content')
<div class="row wrap-tab">
    @include ('pages.cosodulieupage.menu')
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
</div>
<script src="{{ asset('js/cosodulieu.js') }}" rel="stylesheet"></script>
@endsection
