
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a class="app-brand-link">
            <span class="app-brand-logo demo">
            <img src="{{asset('/template/assets/img/favicon/logoletris2.png')}}" alt="..." width="200px"/>
            </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
            </li>

            <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
            </li>

            <li class="menu-item">
            <a href="/data" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Support">Data Siswa Alumni</div>
            </a>
            </li>
            <li class="menu-item">
            <a href="/create-data" class="menu-link">
                <i class='menu-icon bx bx-list-plus'></i>
                <div data-i18n="Documentation">Create Data Siswa</div>
            </a>
            </li>
            <li class="menu-header small text-uppercase">
            <span class="menu-header-text">OTHER</span>
            </li>
            <li class="menu-item">
            <a href="/" class="menu-link">
                <i class="menu-icon bx bx-power-off me-2"></i>
                    <div data-i18n="Documentation">Log Out</div>
                </a>
                </li>
        </ul>
        </aside>