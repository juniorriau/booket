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
                    <label for="varchar">Koderute
                        <?php echo form_error('koderute') ?>
                    </label>
                    <input type="text" class="form-control" name="koderute" id="koderute" placeholder="Koderute"
                        value="<?php echo $koderute; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Kotaasal
                        <?php echo form_error('kotaasal') ?>
                    </label>
                    <input type="text" class="form-control" name="kotaasal" id="kotaasal" placeholder="Kotaasal"
                        value="<?php echo $kotaasal; ?>" />
                </div>
                <div class="form-group">
                    <label for="varchar">Kotatujuan
                        <?php echo form_error('kotatujuan') ?>
                    </label>
                    <input type="text" class="form-control" name="kotatujuan" id="kotatujuan" placeholder="Kotatujuan"
                        value="<?php echo $kotatujuan; ?>" />
                </div>
                <div class="form-group">
                    <label for="int">Jenistiket
                        <?php echo form_error('jenistiket') ?>
                    </label>
                    <select name="jenistiket" id="jenistiket" class="form-control">
                        <?php
                        if (!empty($kelas)) {
                            foreach ($kelas as $k) {
                                echo '<option value="' . $k->id . '" ' . ($k->id == $jenistiket ? 'selected' : '') . '>' . $k->namakelas . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="int">Perusahaan
                        <?php echo form_error('perusahaan') ?>
                    </label>
                    <select name="perusahaan" id="perusahaan" class="form-control">
                        <?php
                        if (!empty($perusahaanlist)) {
                            foreach ($perusahaanlist as $p) {
                                echo '<option value="' . $p->id . '" ' . ($p->id == $perusahaan ? 'selected' : '') . '>' . $p->namaperusahaan . '</option>';
                            }
                        }
                        ?>
                    </select>
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
                            <a href="<?php echo site_url('app/rute') ?>" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>