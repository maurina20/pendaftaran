<!--**********************************
            Nav header start
        ***********************************-->
<div class="nav-header">
    <div class="brand-logo">
        <a href="<?= base_url('dashboard') ?>">
            <b class="logo-abbr"><img src="<?= base_url() ?>assets/images/log.png" alt=""> </b>
            <span class="logo-compact"><img src="<?= base_url() ?>assets/images/smk.png" alt=""></span>
            <span class="brand-title">
                <img src="<?= base_url() ?>assets/images/smk.png" alt="" width="175px">
            </span>
        </a>
    </div>
</div>


<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>

        <div class="header-right">
            <ul class="clearfix">

                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="<?= base_url() ?>assets/images/user/us.png" height="40" width="40" alt="">
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="<?= base_url('pengguna/sett_pass') ?>"><i class="icon-user"></i> <span>Profile</span></a>
                                </li>
                                <hr class="my-2">
                                <li><a href="<?= base_url('auth/logout') ?>" onclick="return confirm('Yakin ingin keluar?')"><i class="icon-key"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>