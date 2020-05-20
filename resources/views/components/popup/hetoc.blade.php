<div class="wrap-origin-class">
    <!-- <div class="origin-class-icon">
        <img src="{{ asset('images/origin/cybernetic.png') }}" />
        <div class="origin-class-counter">
            <span>6</span>
        </div>
    </div> -->
    {{ $slot }}
    <!-- popup-info  -->
    <div class="origin-class-popup">
        <div class="header">
            <img src="{{ asset('images/origin/cybernetic.png') }}" />
            <div>Vệ Binh Tinh Tú</div>
        </div>
        <div class="content">
            <div class="dis">
                Khi tướng Vệ Binh Tinh Tú dùng kỹ năng,các tướng Vệ Binh Tinh Tú khác sẽ nhận thêm năng
                lượng.
            </div>
            <div class="list-dis">
                <div class="counter">3</div>
                <div class="counter-dis">Tổng 30 năng lượng.</div>
            </div>
            <div class="list-dis">
                <div class="counter">6</div>
                <div class="counter-dis">Tổng 60 năng lượng.</div>
            </div>
        </div>
        <div class="footer">
            <div class="title">
                Champions:
            </div>
            <div class="list-champions">
                <img src="{{ asset('images/champions/Ekko.png') }}" />
                <img src="{{ asset('images/champions/Ekko.png') }}" />
                <img src="{{ asset('images/champions/Ekko.png') }}" />
                <img src="{{ asset('images/champions/Ekko.png') }}" />
            </div>
        </div>
    </div>
    <!-- end popup-info  -->
</div>