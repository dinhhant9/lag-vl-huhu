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
<link href="{{ asset('css/cosodulieu.css') }}" rel="stylesheet">
<link href="{{ asset('css/danhsachhe.css') }}" rel="stylesheet">
{{-- Nội dung của trang --}}
@endsection
@section('content')
<div class="row wrap-tab">
    @include ('pages.cosodulieupage.menu')
    <!-- classes tab content  -->
    <div class="tabcontent">
        <div class="container"><br>
            <div class="wrap-combinded-items">
                <div class="search">
                    <h2>Filterable Table</h2>
                    <input class="form-control" id="myInput" type="text" placeholder="Tìm kiếm hệ">
                </div>              
                <p>Type something in the input field to search the table for first names, last names or emails:
                </p>
                <br>
                <table class="table table-striped">
                    <tr>
                        <th class="width-class">Class</th>
                        <th class="width-bouns">Bouns</th>
                        <th class="width-units">Units</th>
                    </tr>
                    <tbody id="myTable">
                        @for($j=0; $j < 25; $j++) <tr>
                            <td class = "class-info">
                                @component('components.popup.hetoc')
                                <div class="class">
                                    <img src="{{ asset('images/class/blademaster.png') }}" />
                                    <div class="item-name">Kiếm Khách</div>
                                </div>
                                @endcomponent
                            </td>
                            <td>
                                <div class="class-bonus">
                                    <div class="class-dis">Tướng Kiếm Khách có tỷ lệ ra thêm 2 đòn đánh nữa.Các đòn đánh
                                        cộng thêm này có sát thương như đòn đánh thường và đi kèm tất cả hiệu ứng từ
                                        trang bị của chủ sở hữu.</div>
                                    <div class="bonus-list">
                                        <div class="bonus-item">
                                            <div class="count">3</div>
                                            <div class="value">30% tỷ lệ thêm đòn đánh</div>
                                        </div>
                                        <div class="bonus-item">
                                            <div class="count">6</div>
                                            <div class="value">55% tỷ lệ thêm đòn đánh</div>
                                        </div>
                                        <div class="bonus-item">
                                            <div class="count">9</div>
                                            <div class="value">100% tỷ lệ thêm đòn đánh</div>
                                        </div>
                                    </div>
                                </div>


                            </td>
                            <td>
                                <div class="units-list">
                                    @for ($h = 0; $h < 10; $h++) @component('components.popup.tuong', ['addStyle'=>
                                        'width: 32px; height:32px'])
                                        @endcomponent
                                        @endfor
                                </div>
                            </td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- end classes tab content  -->
</div>
<script src="{{ asset('js/cosodulieu.js') }}" rel="stylesheet"></script>
@endsection