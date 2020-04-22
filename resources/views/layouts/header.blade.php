<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <img class="navbar-brand" src="{{URL::asset('/images/brand.svg')}}" alt="profile Pic" style="max-height: 40px;">
    {{-- <a class="navbar-brand" href="#">Carousel</a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav justify-content-center">
        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
          <a class="nav-link" href="/">Trang chủ</a>
        </li>
        <li class="nav-item  {{ request()->is('doi-hinh-chuan') ? 'active' : '' }}">
          <a class="nav-link" href="/doi-hinh-chuan">Đội hình chuẩn</a>
        </li>
        <li class="nav-item  {{ request()->is('danh-sach-tuong') ? 'active' : '' }}">
          <a class="nav-link" href="/danh-sach-tuong">Cơ sở dữ liệu</a>
        </li>
        <li class="nav-item  {{ request()->is('bai-viet') ? 'active' : '' }}">
          <a class="nav-link" href="/bai-viet">Bài viết</a>
        </li>
        <li class="nav-item  {{ request()->is('chi-tiet-ban-cap-nhat') ? 'active' : '' }}">
          <a class="nav-link" href="/chi-tiet-ban-cap-nhat">Chi tiết bản cập nhật</a>
        </li>
      </ul>
    </div>
  </nav>
</header>