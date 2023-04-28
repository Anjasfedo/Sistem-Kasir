<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu Utama</li>
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @if (auth()->user()->level == 1)
            <li class="header">Data</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                    <span>Data Menu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('kategori.index') }}">
                            <i class="fa fa-cube"></i>
                            <span>Kategori</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('produk.index') }}">
                            <i class="fa fa-cubes"></i>
                            <span>Produk</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('member.index') }}">
                    <i class="fa fa-id-card"></i>
                    <span>Data Pelanggan</span>
                </a>
            </li>
            <li class="header">Transaksi</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-upload"></i>
                    <span>Penjualan Menu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('penjualan.index') }}">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span>Daftar Penjualan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('transaksi.baru') }}">
                            <i class="fa fa-cart-arrow-down"></i>
                            <span>Transaksi Baru</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('transaksi.index') }}">
                            <i class="fa fa-cart-arrow-down"></i>
                            <span>Transaksi Aktif</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="header">Laporan</li>
            <li>
                <a href="{{ route('laporan.index') }}">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    <span>Laporan Keuangan</span>
                </a>
            </li>
            <li class="header">Pengaturan</li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-users"></i>
                    <span>Pengaturan User</span>
                </a>
            </li>
            <li>
                <a href="{{ route('setting.index') }}">
                    <i class="fa fa-cogs"></i>
                    <span>Pengaturan Usaha</span>
                </a>
            </li>
            @else
            <li class="header">Transaksi</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-upload"></i>
                    <span>Penjualan Menu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('transaksi.baru') }}">
                            <i class="fa fa-cart-arrow-down"></i>
                            <span>Transaksi Baru</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('transaksi.index') }}">
                            <i class="fa fa-cart-arrow-down"></i>
                            <span>Transaksi Aktif</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
        </section>
    </aside>