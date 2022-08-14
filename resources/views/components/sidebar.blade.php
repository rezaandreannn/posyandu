<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Menu</li>
            <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            {{-- <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                </a>
            </li> --}}
            <li class="nav-label">Balita</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Imuniasi</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('imunisasibalita.index') }}">Semua</a></li>
                    <li><a href="{{ route('imunisasibalita.antri') }}">Mengantri</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">vitamin</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('vitaminbalita.index') }}">Semua</a></li>
                    <li><a href="{{ route('vitaminbalita.antri') }}">Mengantri</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Penimbangan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="">Semua</a></li>
                    <li><a href="">Mengantri</a></li>
                </ul>
            </li>
            <li class="nav-label">Bumil</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Imuniasi</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="">Semua</a></li>
                    <li><a href="">Mengantri</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">vitamin</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="">Semua</a></li>
                    <li><a href="">Mengantri</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Penimbangan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="">Semua</a></li>
                    <li><a href="">Mengantri</a></li>
                </ul>
            </li>
            <li class="nav-label">Aplikasi</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Pengaturan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('user.index') }}">Pengguna</a></li>
                    <li><a href="{{ route('role.index') }}">Peran</a></li>
                    <li><a href="{{ route('setting.edit') }}">Antrian</a></li>
                    <li><a href="./form-editor.html">Editor</a></li>
                    <li><a href="./form-picker.html">Picker</a></li>
                </ul>
            </li>
        </ul>


    </div>
</div>
