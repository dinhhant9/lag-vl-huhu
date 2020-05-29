{{-- Bien $character truyen tu ben ngoai component vao --}}
@if(!empty($character))
    @php
        $tencuatuong = $character;
        $giatiencuatuong = \App\Http\Controllers\TuongController::layGiaTienCuaTuong($tencuatuong);
        $arrToc = \App\Http\Controllers\TuongController::layTocCuaTuongTiengAnh($tencuatuong);
        $arrHe = \App\Http\Controllers\TuongController::layHeCuaTuongTiengAnh($tencuatuong);
        $arrTrangBi= \App\Http\Controllers\TuongController::layTrangBiCuaTuong($tencuatuong);
    @endphp
@endif
<div class="character no-collapsable">
    <div class="character-image character-cost-{{ $giatiencuatuong }} lv3">
        @if(empty($tencuatuong))
            <img src="{{ asset('images/champions/'.'Ekko'.'.png') }}" style="{{$addStyle or NULL}}"/>
        @else
            <img src="{{ asset('images/champions/'.str_replace(' ', '', $tencuatuong).'.png') }}" style="{{$addStyle or NULL}}"/>
        @endif
    </div>
    <div class="character-items">
            <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png" alt="Guardian Angel">
            <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png" alt="Guardian Angel">
            <img class="character-icon" src="https://rerollcdn.com/items/GuardianAngel.png" alt="Guardian Angel">
    </div>
    <!-- start popup  -->
    <div class="row character-popup">
        <div class="col-md-3 col-3 character-info">
            @if(empty($tencuatuong))
                <img src="{{ asset('images/champions/'.'Ekko'.'.png') }}" style="{{$addStyle or NULL}}"/>
            @else
                <img src="{{ asset('images/champions/'.str_replace(' ', '', $tencuatuong).'.png') }}" style="{{$addStyle or NULL}}"/>
            @endif
            <p>{{ $tencuatuong or null }}</p>
        </div>
        <div class="col-md-7 col-7 charactor-origin-wrap">
            @if(!empty($tencuatuong))
                @foreach ($arrToc as $toc)
                <div class="charactor-origin">
                    <img src="{{ asset('images/toc/'.str_replace(' ', '', strtolower($toc)).'.png') }}" />
                    <p>{{ \App\Http\Controllers\TocController::layTocCuaTuongTiengViet($toc)->name_vi }}</p>
                </div>
                @endforeach

                @foreach ($arrHe as $he)
                <div class="charactor-origin">
                    <img src="{{ asset('images/he/'.str_replace(' ', '', strtolower($he)).'.png') }}" />
                    <p>{{ \App\Http\Controllers\HeController::layHeCuaTuongTiengViet($he)->name_vi }}</p>
                </div>
                @endforeach
            @endif
        </div>
        <div class="col-md-2 col-2 charactor-cost">
            <img src="{{ asset('images/icon-gold.svg') }}" />
                <div>{{ !empty($character) ? \App\Http\Controllers\TuongController::layGiaTienCuaTuong($character) : '' }}</div>
        </div>
        <div class="col-md-12 item">
            <div>Items:</div>
            @foreach ($arrTrangBi as $trangbi)
                <div class="charactor-origin">
                    @php
                        $trangbikhongdaucach = str_replace('\'', '',str_replace(' ', '', $trangbi))
                    @endphp
                    <img src="{{ asset('images/items/'.$trangbikhongdaucach.'.png') }}" />
                </div>
                @endforeach
        </div>
    </div>
    <!-- end popup  -->
</div>