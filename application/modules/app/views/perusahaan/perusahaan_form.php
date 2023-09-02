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
                    <label for="varchar">Nama Perusahaan
                        <?php echo form_error('namaperusahaan') ?>
                    </label>
                    <input type="text" class="form-control" name="namaperusahaan" id="namaperusahaan"
                        placeholder="Namaperusahaan" value="<?php echo $namaperusahaan; ?>" />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat
                        <?php echo form_error('alamat') ?>
                    </label>
                    <textarea class="form-control" rows="3" name="alamat" id="alamat"
                        placeholder="Alamat"><?php echo $alamat; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="varchar">Telepon
                        <?php echo form_error('telepon') ?>
                    </label>
                    <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon"
                        value="<?php echo $telepon; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Penanggung Jawab
                        <?php echo form_error('penanggungjawab') ?>
                    </label>
                    <input type="text" class="form-control" name="penanggungjawab" id="penanggungjawab"
                        placeholder="Penanggungjawab" value="<?php echo $penanggungjawab; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Nomor Penanggung Jawab
                        <?php echo form_error('nomorpenanggungjawab') ?>
                    </label>
                    <input type="text" class="form-control" name="nomorpenanggungjawab" id="nomorpenanggungjawab"
                        placeholder="Nomorpenanggungjawab" value="<?php echo $nomorpenanggungjawab; ?>" />
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
                            <a href="<?php echo site_url('app/perusahaan') ?>" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>