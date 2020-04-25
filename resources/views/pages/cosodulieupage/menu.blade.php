
    <div class="tab">
        <a href="/co-so-du-lieu" class="tablinks {{ request()->is('co-so-du-lieu') ? 'active' : '' }}" onclick="openCity(event, 'champions')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Danh sách tướng
        </a>
        <a href="/danh-sach-trang-bi" class="tablinks {{ request()->is('danh-sach-trang-bi') ? 'active' : '' }}" onclick="openCity(event, 'items')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Danh sách trang bị
        </a>
        <a href="/cach-ghep-do" class="tablinks {{ request()->is('cach-ghep-do') ? 'active' : '' }}" onclick="openCity(event, 'itembuilder')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Cách ghép đồ
        </a>
        <a href="/toc"class="tablinks {{ request()->is('toc') ? 'active' : '' }}" onclick="openCity(event, 'origins')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Tộc
        </a>
        <a href="/he" class="tablinks {{ request()->is('he') ? 'active' : '' }}" onclick="openCity(event, 'classes')" id="defaultOpen">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Hệ
        </a>
    </div>
