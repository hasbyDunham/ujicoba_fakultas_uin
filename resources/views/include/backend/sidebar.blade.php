
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">

        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2"><img src="{{asset('backend/assets/img/logo doang.png')}}" width="68" height="68"></span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="{{url('admin/home')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>
      <li class="menu-item ">
        <a href="{{url('admin/pengumuman')}}" class="menu-link">
            <i class="menu-icon bi bi-megaphone"></i></i>
          <div data-i18n="Analytics">Pengumuman</div>
        </a>
      </li>
      <li class="menu-item ">
        <a href="{{url('admin/berita')}}" class="menu-link">
            <i class="menu-icon bi bi-megaphone"></i></i>
          <div data-i18n="Analytics">Pengumuman</div>
        </a>
      </li>
      <li class="menu-item ">
        <a href="{{url('admin/user')}}" class="menu-link">
            <i class="menu-icon bi bi-person"></i></i>
          <div data-i18n="Analytics">User</div>
        </a>
      </li>
    </ul>
  </aside>
