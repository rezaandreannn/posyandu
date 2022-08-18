<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Menu</li>
            <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="fas fa-chart-line"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label">Balita</li>
            <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="fas fa-baby"></i><span class="nav-text">Data Balita</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-bug"></i><span class="nav-text">Imunisasi</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('imunisasibalita.index') }}">Semua</a></li>
                    <li><a href="{{ route('imunisasibalita.antri') }}">Mengantri</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-capsules"></i><span class="nav-text">vitamin</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('vitaminbalita.index') }}">Semua</a></li>
                    <li><a href="{{ route('vitaminbalita.antri') }}">Mengantri</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-balance-scale-left"></i><span class="nav-text">Penimbangan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('penimbanganbalita.index') }}">Semua</a></li>
                    <li><a href="{{ route('penimbanganbalita.antri') }}">Mengantri</a></li>
                </ul>
            </li>
            <li class="nav-label">Bumil</li>
            <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="fas fa-female"></i><span class="nav-text">Data Bumil</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-bug"></i><span class="nav-text">Imunisasi</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('imunisasibumil.index') }}">Semua</a></li>
                    <li><a href="{{ route('imunisasibumil.antri') }}">Mengantri</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-capsules"></i><span class="nav-text">vitamin</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('vitaminbumil.index') }}">Semua</a></li>
                    <li><a href="{{ route('vitaminbumil.antri') }}">Mengantri</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-balance-scale-left"></i><span class="nav-text">Penimbangan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('penimbanganbumil.index') }}">Semua</a></li>
                    <li><a href="{{ route('penimbanganbumil.antri') }}">Mengantri</a></li>
                </ul>
            </li>
            <li class="nav-label">Aplikasi</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-cog"></i><span class="nav-text">Pengaturan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('user.index') }}">Pengguna</a></li>
                    <li><a href="{{ route('role.index') }}">Peran</a></li>
                    <li><a href="{{ route('setting.edit') }}">Antrian</a></li>
                </ul>
            </li>
        </ul>


    </div>
</div>
