<header class="wrapper bg-light pt-1">
    <nav class="navbar navbar-expand-lg classic transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="<?php echo site_url("web") ?>">
                    <img style="max-height: 50px;" src="<?php echo site_url($this->config->item('site_logo')) ?>" srcset="<?php echo site_url($this->config->item('site_logo')) ?> 2x" alt="" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0"><img style="max-height: 50px;" src="<?php echo site_url($this->config->item('site_logo')) ?>" srcset="<?php echo site_url($this->config->item('site_logo')) ?> 2x" alt="" /></h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item "> <a class="nav-link " href="<?php echo site_url() ?>" >Halaman Utama</a> </li>
                        <li class="nav-item "> <a class="nav-link " href="<?php echo site_url("web") ?>" >Beranda</a> </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="#">Visi dan Misi</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Kelurahan Ardipura</a></li>
                            </ul>
                        </li>
                        <li class="nav-item "> <a class="nav-link " href="https://ardipura.jayapurakota.go.id/complaints" >Aduan Online</a> </li>
                        <li class="nav-item "> <a class="nav-link " href="https://ardipura.jayapurakota.go.id/complaints" >Hubungi Kami</a> </li>
                    </ul>
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other ms-lg-4">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item d-none d-md-block">
                        <a href="<?php echo site_url("tpp") ?>" class="btn btn-sm btn-primary rounded-pill" > <i class="uil uil-telegram-alt"></i>  Teras Pelayanan Publik</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->

</header>
<!-- /header -->