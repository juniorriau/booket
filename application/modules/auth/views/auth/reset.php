<!doctype html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title><?php echo $this->config->item('site_title') ?></title>
        <meta name="description" content="<?php echo $this->config->item('site_description') ?>" />
        <meta name="Author" content="GoDesa" />
        <link rel="shortcut icon" href="<?php echo base_url($this->config->item('site_icon')) ?>">
        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

        <!-- WEB FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link href="<?php echo base_url() ?>assets/app/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- THEME CSS -->
        <link href="<?php echo base_url() ?>assets/app/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/app/fonts/fa5/css/all.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/app/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/app/css/color_scheme/blue.css" rel="stylesheet" type="text/css" id="color_scheme" />

    </head>


    <body>

        <div class="padding-15">

            <div class="login-box">

                <!-- login form -->
                <form action="<?php echo $action ?>" method="post" class="sky-form boxed">
                    <header><i class="fa fa-users"></i> Masuk</header>
                    <h3 class="text-center ">
                        <img src="<?php echo base_url($this->config->item('site_logo')) ?>" style="max-width:80%;margin-top:15px" alt="logo">
                    </h3>
                    <?php if ($this->session->userdata('message') <> '') { ?>
                        <div class="alert alert-warning noborder text-center weight-400" role="alert">
                            <strong><?php echo $this->session->userdata('message') ?></strong>
                        </div>
                    <?php } ?>

                    <fieldset>

                        <?php
                        switch ($step) {
                            case 1:
                                ?>
                                <section>
                                    <label class="label">Email Pengguna <?php echo form_error('email') ?></label>
                                    <label class="input">
                                        <i class="icon-append fa fa-envelope"></i>
                                        <input type="email" name="email" id="email">
                                        <span class="tooltip tooltip-top-right">Email Pengguna</span>
                                    </label>
                                </section>
                                <?php
                                break;
                            case 2:
                                ?>
                                <section>
                                    <label class="label">Kata Sandi Baru <?php echo form_error('newpassword') ?></label>
                                    <label class="input">
                                        <i class="icon-append fa fa-key"></i>
                                        <input type="password" name="newpassword" id="newpassword">
                                        <span class="tooltip tooltip-top-right">Kata Sandi Baru</span>
                                    </label>
                                </section>
                                <section>
                                    <label class="label">Konfirmasi Kata Sandi <?php echo form_error('email') ?></label>
                                    <label class="input">
                                        <i class="icon-append fa fa-key"></i>
                                        <input type="password" name="confpassword" id="confpassword">
                                        <span class="tooltip tooltip-top-right">Konfirmasi Kata Sandi</span>
                                    </label>
                                </section>
                                <?php
                                break;
                            default:
                                break;
                        }
                        ?>

                    </fieldset>

                    <footer>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="pull-left">
                                    <a href="<?php echo base_url() ?>">Kembali ke Situs</a> <br />
                                    <a href="<?php echo base_url('app') ?>">Kembali ke Halaman Masuk</a> <br />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <button type="submit" class="btn btn-primary pull-right">Atur Ulang</button>
                            </div>

                            <input type="hidden" name="step" id="step" value="<?php echo $step ?>"/>
                            <input type="hidden" name="redirect_back" id="redirect_back" value="<?php echo $redirect_back ?>"/>
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                            </footer>
                            </form>
                            <!-- /login form -->

                        </div>

                        </div>

                        <!-- JAVASCRIPT FILES -->
                        <script type="text/javascript">var plugin_path = '<?php echo base_url() ?>assets/app/plugins/';</script>
                        <script type="text/javascript" src="<?php echo base_url() ?>assets/app/plugins/jquery/jquery-2.2.3.min.js"></script>
                        <script type="text/javascript" src="<?php echo base_url() ?>assets/app/js/app.js"></script>
                        </body>
                        </html>