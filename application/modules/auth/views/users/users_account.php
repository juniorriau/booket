<!-- page title -->
<header id="page-header">
    <h1><?php echo ucfirst($this->uri->segment(2)) ?></h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url($this->uri->segment(1)) ?>">Home</a></li>
        <li class="breadcrumb-item "><a href="<?php echo base_url($this->uri->segment(1) . "/" . $this->uri->segment(2)) ?>"><?php echo ucfirst($this->uri->segment(2)) ?></a></li>
        <li class="breadcrumb-item active"><?php echo ucfirst($this->uri->segment(3)) ?></li>
    </ol>
</header>
<!-- /page title -->


<div id="content" class="padding-20">

    <div class="panel panel-default">
        <form action="<?php echo $action ?>" method="post" autocomplete="off">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="col-12"><?php echo ucfirst($this->uri->segment(2) . ' ' . $this->uri->segment(3)) ?></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                        <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="varchar">Username <?php echo form_error('username') ?></label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" readonly="true" />
                </div>
                <div class="form-group">
                    <label for="varchar">Email <?php echo form_error('email') ?></label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?php echo $email; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Old Password <?php echo form_error('password') ?></label>
                    <?php if (!empty($id)) { ?>
                        <label for="varchar" class="badge badge-warning ">* Fill for change the password</label>
                    <?php } ?>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Old Password"  />
                </div>
                <div class="form-group">
                    <label for="varchar">New Password <?php echo form_error('newpassword') ?></label>
                    <?php if (!empty($id)) { ?>
                        <label for="varchar" class="badge badge-warning ">* Fill for change the password</label>
                    <?php } ?>
                    <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="New Password"  />
                </div>

            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <input type="hidden" name="oldpassword" value="<?php echo $password ?>"/>
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                            <button type="submit" class="btn btn-info"><?php echo $button ?></button>
                            <a href="<?php echo site_url('app') ?>" class="btn btn-warning">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>