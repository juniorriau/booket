<!--
                ASIDE
                Keep it outside of #wrapper (responsive purpose)
-->
<aside id="aside">

    <nav id="sideNav"><!-- MAIN MENU -->
        <ul class="nav nav-list">
            <li class="el_primary"><a href="<?php echo base_url() ?>" target="new"><i class="main-icon fas fa-globe"></i> <span> Website</span> </a></li>
            <li class="el_primary <?php echo $this->uri->segment(2) == "" ? 'active' : '' ?>"><a href="<?php echo base_url("app/") ?>"><i class="main-icon fas fa-home"></i> <span> Beranda</span> </a></li>

            <?php foreach ($session['menus'] as $m) { ?>
                <li class="el_primary <?php echo ucfirst($this->uri->segment(2)) == $m['name'] ? 'active' : '' ?>"><a href="<?= $m['url'] ?>"><?= !empty($m['icon']) ? '<i class="main-icon fas fa-' . $m['icon'] . ' "></i>' : '' ?><span>  <?= empty($m['alias']) ? $m['name'] : $m['alias'] ?> </span></a></li>
            <?php } ?>
        </ul>
        <?php if ($session['role'] == 1) { ?>

            <ul class="nav nav-list">

                <li class="el_primary <?php echo $this->uri->segment(2) == "users" ? 'active' : '' ?>"><a href="<?php echo base_url() ?>auth/users"><i class="main-icon fas fa-users"></i> <span> Pengguna</span> </a></li>
                <li class="el_primary <?php echo $this->uri->segment(2) == "roles" ? 'active' : '' ?>"><a href="<?php echo base_url() ?>auth/roles"><i class="main-icon fas fa-user-check"></i> <span> Hak Akses </span></a></li>
                <li class="el_primary <?php echo $this->uri->segment(2) == "routings" ? 'active' : '' ?>"><a href="<?php echo base_url() ?>auth/routings"><i class="main-icon fas fa-paper-plane"></i> <span> Akses URL </span></a></li>
                <li class="el_primary <?php echo $this->uri->segment(2) == "settings" ? 'active' : '' ?>"><a href="<?php echo base_url() ?>app/settings"><i class="main-icon fas fa-cog"></i> <span> Pengaturan </span></a></li>
            </ul>
        <?php } ?>
    </nav>

    <span id="asidebg"><!-- aside fixed background --></span>
</aside>
<!-- /ASIDE -->


<!-- HEADER -->
<header id="header">

    <!-- Mobile Button -->
    <button id="mobileMenuBtn"></button>

    <!-- Logo -->
    <span class="logo pull-left">
        <img src="<?php echo base_url($this->config->item('site_logo')) ?>" alt="admin panel" height="35" />
    </span>
    <nav>
        <!-- OPTIONS LIST -->
        <ul class="nav pull-right">

            <!-- USER OPTIONS -->
            <li class="dropdown pull-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img class="user-avatar" alt="" src="<?php echo $session['image'] ? base_url($session['image']) : base_url("assets/app/images/noavatar.jpg") ?>" height="34" />
                    <span class="user-name">
                        <span class="hidden-xs">
                            <?php echo $session['username'] ?> <i class="fa fa-angle-down"></i>
                        </span>
                    </span>
                </a>
                <ul class="dropdown-menu hold-on-click">

                    <li><!-- settings -->
                        <a href="<?php echo base_url('auth/users/userdetails/' . $session['id']) ?>"><i class="fa fa-user"></i> Profil Akun</a>
                    </li>
                    <li><!-- settings -->
                        <a href="<?php echo base_url('auth/users/account/' . $session['id']) ?>"><i class="fa fa-user-secret"></i> Pengaturan Akun</a>
                    </li>

                    <li class="divider"></li>
                    <li><!-- logout -->
                        <a href="<?php echo base_url('auth/auth/logout') ?>"><i class="fa fa-power-off"></i> Keluar</a>
                    </li>
                </ul>
            </li>
            <!-- /USER OPTIONS -->

        </ul>
        <!-- /OPTIONS LIST -->

    </nav>

</header>
<!-- /HEADER -->