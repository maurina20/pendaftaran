<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="<?= base_url('dashboard') ?>" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label">Data</li>

            <?php if ($this->session->hak_akses != 'SISWA') { ?>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-envelope menu-icon"></i> <span class="nav-text">Master Data</span>
                    </a>
                    <ul aria-expanded="false">
                        <?php if ($this->session->hak_akses == 'ADMIN') { ?>
                            <li><a href="<?= base_url('pengguna') ?>">Pengguna</a></li>
                        <?php } ?>
                        <li><a href="<?= base_url('jurusan') ?>">Jurusan</a></li>
                        <li><a href="<?= base_url('tahun') ?>">Tahun Akademik</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Biodata</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?= base_url('bio') ?>">Biodata Siswa</a></li>
                    </ul>
                </li>
                <li class="nav-label">PPDB</li>
                <li>
                    <a href="<?= base_url('daftar') ?>" aria-expanded="false">
                        <i class="fa-regular fa-file"></i><span class="nav-text">Pendaftaran</span>
                    </a>
                </li>
                <li class="nav-label">Laporan</li>
                <li>
                    <a href="<?= base_url('laporan') ?>" aria-expanded="false">
                        <i class="fa-regular fa-folder"></i><span class="nav-text">Laporan Pendaftaran</span>
                    </a>
                </li>
            <?php } else { ?>
                <li>
                    <a href="<?= base_url('biosis') ?>" aria-expanded="false">
                        <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Biodata</span>
                    </a>
                </li>
                <li class="nav-label">PPDB</li>
                <li>
                    <a href="<?= base_url('daftarsiswa') ?>" aria-expanded="false">
                        <i class="fa-regular fa-file"></i><span class="nav-text">Pendaftaran</span>
                    </a>
                </li>
            <?php } ?>

            <li>
                <a href="<?= base_url('auth/logout') ?>" aria-expanded="false" onclick="return confirm('Yakin ingin keluar?')">
                    <i class="icon-key"></i><span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>