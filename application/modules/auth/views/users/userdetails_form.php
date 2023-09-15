<!-- page title -->
<header id="page-header">
    <h1>
        <?php echo ucfirst($this->uri->segment(2)) ?>
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url($this->uri->segment(1)) ?>">Beranda</a></li>
        <li class="breadcrumb-item "><a
                href="<?php echo base_url($this->uri->segment(1) . "/" . $this->uri->segment(2)) ?>"><?php echo ucfirst($this->uri->segment(2)) ?></a></li>
        <li class="breadcrumb-item active">
            <?php echo ucfirst($this->uri->segment(3)) ?>
        </li>
    </ol>
</header>
<!-- /page title -->


<div id="content" class="padding-20">
    <form method="post" action="<?php echo $action ?>" autocomplete="off">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo ucfirst($this->uri->segment(2) . ' ' . $this->uri->segment(3)) ?>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="varchar">Fullname
                        <?php echo form_error('fullname') ?>
                    </label>
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname"
                        value="<?php echo $fullname; ?>" />
                </div>
                <div class="form-group">
                    <label for="address">Address
                        <?php echo form_error('address') ?>
                    </label>
                    <textarea class="form-control" rows="3" name="address" id="address"
                        placeholder="Address"><?php echo $address; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="url">Url
                        <?php echo form_error('url') ?>
                    </label>
                    <input type="url" class="form-control" name="url" id="url" placeholder="Url"
                        value="<?php echo $url; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Image
                        <?php echo form_error('image') ?>
                    </label>
                    <?php if (!empty($image)) { ?>
                        <img width="30%" class="img-responsive img-thumbnail" src="<?php echo site_url($image) ?>" />
                    <?php } ?>
                    <input type="text" class="form-control" name="image" id="image" readonly=""
                        value="<?php echo $image; ?>" />
                    <input type="file" class="form-control" name="fileimage" id="fileimage" />
                </div>
                <div class="form-group">
                    <label for="description">Aboutme
                        <?php echo form_error('description') ?>
                    </label>
                    <textarea class="form-control" rows="3" name="description" id="description"
                        placeholder="Aboutme"><?php echo $description; ?></textarea>
                </div>

            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>"
                                value="<?= $this->security->get_csrf_hash() ?>">
                            <button type="submit" class="btn btn-primary">
                                <?php echo $button ?>
                            </button>
                            <a href="<?php echo site_url('auth/users') ?>" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>