<footer class="bg-navy text-inverse">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="">
            <h6 class="display-4 mb-6 mb-lg-0  text-white text-center">&ldquo;Hen Tecahi Yo Onomi T'Mar Ni Hanased&ldquo;</h6>
        </div>
        <!--/div -->
        <hr class="mt-11 mb-12" />
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-4">
                <div class="widget">
                    <img class="img img-responsive" style="max-width: 50%;" src="<?php echo site_url($this->config->item('site_logo')) ?>"  alt="" />
                    <p class="mb-4">© Kelurahan Ardiprua. <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social social-white">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-4">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Kantor</h4>
                    <address class="pe-xl-15 pe-xxl-17"><i class="uil uil-telegram"></i> <?php echo $this->config->item('site_address') ?></address>
                    <a href="mailto:#"><i class="uil uil-envelope-open"></i> <?php echo $this->config->item('site_email') ?></a><br /><i class="uil uil-phone-alt"></i> <?php echo $this->config->item('site_phone') ?>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-4">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Pintasan</h4>
                    <ul class="list-unstyled  mb-0">
                        <li><a href="https://ardipura.jayapurakota.go.id/web">Profil Kelurahan</a></li>
                        <li><a href="https://ardipura.jayapurakota.go.id/web">Berita</a></li>
                        <li><a href="https://ardipura.jayapurakota.go.id/tpp">Teras Pelayanan Publik</a></li>
                        <li><a href="https://ardipura.jayapurakota.go.id/complaints">Aduan Online </a></li>
                        <li><a href="https://ardipura.jayapurakota.go.id/web">Badan Keswadayaan Masyarakat</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<script src="<?php echo site_url() ?>assets/web/js/plugins.js"></script>
<script src="<?php echo site_url() ?>assets/web/js/theme.js"></script>
<?php
if (isset($extrajs)) {
    $this->load->view($extrajs);
}
?>
</body>

</html>
