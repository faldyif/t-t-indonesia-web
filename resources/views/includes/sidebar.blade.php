    <div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class= "{{ set_active('dashboard.index') }}">
            <a href="{{ route('home') }}" class="nav-link">
                <i class="icon-home"></i>
                <span class="title">Beranda</span>
                <span class="selected"></span>
            </a>
        </li>
        <li class= "{{ set_active('user.profile') }}">
            <a href="{{ route('user.profile') }}" class="nav-link">
                <i class="icon-user"></i>
                <span class="title">Profil</span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item ">
            <a href="#" class="nav-link ">
                <i class="icon-refresh"></i>
                <span class="title">Permintaan Ta'aruf</span>
                <span class="selected"></span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link nav-toggle">
                <i class="icon-user"></i>
                <span class="title">Data Ikhwan</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link ">
                <i class="icon-user-female"></i>
                <span class="title">Data Akhwat</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="riwayat.html" class="nav-link ">
                <i class="fa fa-history"></i>
                <span class="title">Riwayat Ta'aruf</span>
            </a>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
    </div>