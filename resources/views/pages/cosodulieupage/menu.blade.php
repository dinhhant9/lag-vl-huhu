
    <div class="tab">
        <a href="/co-so-du-lieu-csdl" class="tablinks {{ request()->is('co-so-du-lieu-csdl') ? 'active' : '' }}" onclick="openCity(event, 'champions')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Danh sách tướng
        </a>
        <a href="/danh-sach-trang-bi-csdl" class="tablinks {{ request()->is('danh-sach-trang-bi-csdl') ? 'active' : '' }}" onclick="openCity(event, 'items')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Danh sách trang bị
        </a>
        <a href="/cach-ghep-do-csdl" class="tablinks {{ request()->is('cach-ghep-do-csdl') ? 'active' : '' }}" onclick="openCity(event, 'itembuilder')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Cách ghép đồ
        </a>
        <a href="/toc-csdl"class="tablinks {{ request()->is('toc-csdl') ? 'active' : '' }}" onclick="openCity(event, 'origins')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Tộc
        </a>
        <a href="/he-csdl" class="tablinks {{ request()->is('he-csdl') ? 'active' : '' }}" onclick="openCity(event, 'classes')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Hệ
        </a>
    </div>
