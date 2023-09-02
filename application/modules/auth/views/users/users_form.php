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
    <form action="<?php echo $action ?>" method="post" autocomplete="off">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-lg-12"><?php echo ucfirst($this->uri->segment(2) . ' ' . $this->uri->segment(3)) ?></div>
                </div>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <label for="varchar">Username <?php echo form_error('username') ?></label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" autocomplete="off" />
                </div>
                <div class="form-group">
                    <label for="varchar">Email <?php echo form_error('email') ?></label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?php echo $email; ?>" autocomplete="off" />
                </div>
                <div class="form-group">
                    <label for="varchar">Password <?php echo form_error('newpassword') ?></label>
                    <?php if (!empty($id)) { ?>
                        <label for="varchar" class="badge badge-warning ">* Fill for change the password</label>
                    <?php } ?>
                    <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Password" autocomplete="off" />
                </div>
                <div class="form-group">
                    <label for="int">Role <?php echo form_error('role') ?></label>
                    <select name="role" id="role" class="form-control">
                        <option>--Pilih Role--</option>
                        <?php foreach ($roles as $r) { ?>
                            <option value="<?php echo $r->id ?>" <?php echo $r->id == $role ? 'selected' : '' ?> ><?php echo $r->rolename ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="int">Status <?php echo form_error('isactive') ?></label>
                    <select name="isactive" id="isactive" class="form-control">
                        <option value="1" <?php echo $isactive == 1 ? 'selected' : '' ?>>Active</option>
                        <option value="0" <?php echo $isactive == 0 ? 'selected' : '' ?>>InActive</option>
                    </select>
                </div>

            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <input type="hidden" name="oldpassword" value="<?php echo $oldpassword ?>"/>
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                            <button type="submit" class="btn btn-info"><?php echo $button ?></button>
                            <a href="<?php echo site_url('auth/users') ?>" class="btn btn-warning">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>