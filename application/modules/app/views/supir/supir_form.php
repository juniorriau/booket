<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Supir <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Guuid <?php echo form_error('guuid') ?></label>
            <input type="text" class="form-control" name="guuid" id="guuid" placeholder="Guuid" value="<?php echo $guuid; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Perusahaan <?php echo form_error('perusahaan') ?></label>
            <input type="text" class="form-control" name="perusahaan" id="perusahaan" placeholder="Perusahaan" value="<?php echo $perusahaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Namalengkap <?php echo form_error('namalengkap') ?></label>
            <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="Namalengkap" value="<?php echo $namalengkap; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggallahir <?php echo form_error('tanggallahir') ?></label>
            <input type="text" class="form-control" name="tanggallahir" id="tanggallahir" placeholder="Tanggallahir" value="<?php echo $tanggallahir; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jeniskelamin <?php echo form_error('jeniskelamin') ?></label>
            <input type="text" class="form-control" name="jeniskelamin" id="jeniskelamin" placeholder="Jeniskelamin" value="<?php echo $jeniskelamin; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Nomortelepon <?php echo form_error('nomortelepon') ?></label>
            <input type="text" class="form-control" name="nomortelepon" id="nomortelepon" placeholder="Nomortelepon" value="<?php echo $nomortelepon; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Posisi <?php echo form_error('posisi') ?></label>
            <input type="text" class="form-control" name="posisi" id="posisi" placeholder="Posisi" value="<?php echo $posisi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nomorsim <?php echo form_error('nomorsim') ?></label>
            <input type="text" class="form-control" name="nomorsim" id="nomorsim" placeholder="Nomorsim" value="<?php echo $nomorsim; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenissim <?php echo form_error('jenissim') ?></label>
            <input type="text" class="form-control" name="jenissim" id="jenissim" placeholder="Jenissim" value="<?php echo $jenissim; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Createdat <?php echo form_error('createdat') ?></label>
            <input type="text" class="form-control" name="createdat" id="createdat" placeholder="Createdat" value="<?php echo $createdat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Createdby <?php echo form_error('createdby') ?></label>
            <input type="text" class="form-control" name="createdby" id="createdby" placeholder="Createdby" value="<?php echo $createdby; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Updatedat <?php echo form_error('updatedat') ?></label>
            <input type="text" class="form-control" name="updatedat" id="updatedat" placeholder="Updatedat" value="<?php echo $updatedat; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Updatedby <?php echo form_error('updatedby') ?></label>
            <input type="text" class="form-control" name="updatedby" id="updatedby" placeholder="Updatedby" value="<?php echo $updatedby; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('supir') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>