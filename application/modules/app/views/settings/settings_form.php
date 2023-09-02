<!-- page title -->
<header id="page-header">
    <h1>
        <?php echo ucfirst($this->uri->segment(2)) ?>
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>auth">Beranda</a></li>
        <li class="breadcrumb-item "><a href="<?php echo base_url() ?>auth/users"><?php echo ucfirst($this->uri->segment(2)) ?></a></li>
        <li class="breadcrumb-item active">
            <?php echo ucfirst($this->uri->segment(3)) ?>
        </li>
    </ol>
</header>
<!-- /page title -->


<div id="content" class="padding-20">
    <form method="post" action="<?php echo $action ?>" autocomplete="off" enctype="multipart/form-data">
        <div class="panel panel-default">
            <div class="panel-heading">
                <ul class="nav nav-tabs pull-left ">
                    <li class="active">
                        <a href="#general" data-toggle="tab"><i class="fa fa-cog"></i> Pengaturan Umum</a>
                    </li>
                    <li class="">
                        <a href="#mail" data-toggle="tab"><i class="fa fa-envelope"></i> Email</a>
                    </li>
                    <li class="">
                        <a href="#post" data-toggle="tab"><i class="fa fa-globe"></i> Portal</a>
                    </li>
                    <li class="">
                        <a href="#socialmedia" data-toggle="tab"><i class="fa fa-info-circle"></i> Sosial Media</a>
                    </li>
                    <!-- <li class="">
                        <a href="#wagateway" data-toggle="tab"><i class="fa fa-phone-square-alt"></i> WhatsApp Gateway</a>
                    </li>-->
                </ul>
            </div>


            <!-- panel content -->

            <div class="panel-body">
                <div class="tab-content transparent">

                    <div id="general" class="tab-pane active">
                        <div class="form-group">
                            <label for="varchar">Site Name </label>
                            <input type="text" class="form-control" name="site_name" id="site_name"
                                value="<?php echo $site_name; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Site URL </label>
                            <input type="url" class="form-control" name="site_url" id="site_url"
                                value="<?php echo $site_url; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Site Title </label>
                            <input type="text" class="form-control" name="site_title" id="site_title"
                                value="<?php echo $site_title; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Site Description</label>
                            <input type="text" class="form-control" name="site_description" id="site_description"
                                value="<?php echo $site_description; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Site Email </label>
                            <input type="email" class="form-control" name="site_email" id="site_email"
                                value="<?php echo $site_email; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Site Logo Vertical</label>
                            <?php if (!empty($site_logo)) { ?>
                                <img class="img-thumbnail" style="max-height: 240px"
                                    src="<?php echo site_url($site_logo_vertical) ?>" />
                            <?php } ?>
                            <input class="form-control" type="file" name="filelogovertical" id="filelogovertical" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Site Logo Horizontal </label>
                            <?php if (!empty($site_logo)) { ?>
                                <img class="img-thumbnail" style="max-height: 240px"
                                    src="<?php echo site_url($site_logo_horizontal) ?>" />
                            <?php } ?>
                            <input class="form-control" type="file" name="filelogohorizontal" id="filelogohorizontal" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Site Icon </label>
                            <?php if (!empty($site_icon)) { ?>
                                <img class="img-thumbnail" style="max-height: 240px"
                                    src="<?php echo site_url($site_icon) ?>" />
                            <?php } ?>
                            <input class="form-control" type="file" name="fileicon" id="fileicon" />
                        </div>

                        <div class="form-group">
                            <label for="varchar">Site Address </label>
                            <input type="text" class="form-control" name="site_address" id="site_address"
                                value="<?php echo $site_address; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Phone Number</label>
                            <input type="text" class="form-control" name="site_phone" id="site_phone"
                                value="<?php echo $site_phone; ?>" />
                        </div>
                    </div>
                    <div id="mail" class="tab-pane">
                        <div class="form-group">
                            <label for="varchar">SMTP Host</label>
                            <input type="text" class="form-control" name="smtp_host" id="smtp_host"
                                value="<?php echo $smtp_host; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">SMTP User</label>
                            <input type="email" class="form-control" name="smtp_user" id="smtp_user"
                                value="<?php echo $smtp_user; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">SMTP Password</label>
                            <input type="password" class="form-control" name="smtp_pass" id="smtp_pass"
                                value="<?php echo base64_decode($smtp_pass); ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">SMTP Port</label>
                            <input type="text" class="form-control" name="smtp_port" id="smtp_port"
                                value="<?php echo $smtp_port; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">SMTP Secure</label>
                            <select name="smtp_secure" class="form-control" id="smtp_secure">
                                <option value="tls" <?php echo $smtp_secure == "tls" ? 'selected' : '' ?>>TLS</option>
                                <option value="ssl" <?php echo $smtp_secure == "ssl" ? 'selected' : '' ?>>SSL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">Reply To</label>
                            <input type="text" class="form-control" name="reply_to" id="reply_to"
                                value="<?php echo $reply_to; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Mail From</label>
                            <input type="text" class="form-control" name="email_from" id="email_from"
                                value="<?php echo $email_from; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Mail From Name</label>
                            <input type="text" class="form-control" name="email_from_name" id="email_from_name"
                                value="<?php echo $email_from_name; ?>" />
                        </div>
                    </div>
                    <div id="post" class="tab-pane ">
                        <div class="form-group">
                            <label for="varchar">Limit Posts per Page</label>
                            <input type="text" class="form-control" name="site_limit_post" id="site_limit_post"
                                value="<?php echo $site_limit_post; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Enable Recent Post</label>
                            <select class="form-control" name="site_enable_recent" id="site_enable_recent">
                                <option value="1" <?php echo $site_enable_recent == 1 ? 'selected' : ''; ?>>Yes</option>
                                <option value="0" <?php echo $site_enable_recent == 0 ? 'selected' : ''; ?>>No</option>
                            </select>
                        </div>
                    </div>
                    <div id="socialmedia" class="tab-pane">
                        <div class="form-group">
                            <label for="varchar">Facebook</label>
                            <input type="text" class="form-control" name="social_facebook" id="social_facebook"
                                value="<?php echo $social_facebook; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Twitter</label>
                            <input type="text" class="form-control" name="social_twitter" id="social_twitter"
                                value="<?php echo $social_twitter; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Instagram</label>
                            <input type="text" class="form-control" name="social_instagram" id="social_instagram"
                                value="<?php echo $social_instagram; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Youtube</label>
                            <input type="text" class="form-control" name="social_youtube" id="social_youtube"
                                value="<?php echo $social_youtube; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Linkedin</label>
                            <input type="text" class="form-control" name="social_linkedin" id="social_linkedin"
                                value="<?php echo $social_linkedin; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Thumbler</label>
                            <input type="text" class="form-control" name="social_thumbler" id="social_thumbler"
                                value="<?php echo $social_thumbler; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="varchar">Pinterest</label>
                            <input type="text" class="form-control" name="social_pinterest" id="social_pinterest"
                                value="<?php echo $social_pinterest; ?>" />
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>"
                                    value="<?= $this->security->get_csrf_hash() ?>">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo $button ?>
                                </button>
                                <a href="<?php echo site_url('app/') ?>" class="btn btn-danger">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>