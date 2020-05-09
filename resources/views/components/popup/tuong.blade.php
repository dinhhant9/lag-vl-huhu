<div class="character no-collapsable">
    <div class="character-image">
        <img src="{{ asset('images/champions/Ekko.png') }}" style = "{{$addStyle or NULL}}"/>
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