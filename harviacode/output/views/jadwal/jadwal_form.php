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
        <h2 style="margin-top:0px">Jadwal <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Guuid <?php echo form_error('guuid') ?></label>
            <input type="text" class="form-control" name="guuid" id="guuid" placeholder="Guuid" value="<?php echo $guuid; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kodejadwal <?php echo form_error('kodejadwal') ?></label>
            <input type="text" class="form-control" name="kodejadwal" id="kodejadwal" placeholder="Kodejadwal" value="<?php echo $kodejadwal; ?>" />
        </div>
	    <div class="form-group">
            <label for="bigint">Armada <?php echo form_error('armada') ?></label>
            <input type="text" class="form-control" name="armada" id="armada" placeholder="Armada" value="<?php echo $armada; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Perusahaan <?php echo form_error('perusahaan') ?></label>
            <input type="text" class="form-control" name="perusahaan" id="perusahaan" placeholder="Perusahaan" value="<?php echo $perusahaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggalberangkat <?php echo form_error('tanggalberangkat') ?></label>
            <input type="text" class="form-control" name="tanggalberangkat" id="tanggalberangkat" placeholder="Tanggalberangkat" value="<?php echo $tanggalberangkat; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggalpulang <?php echo form_error('tanggalpulang') ?></label>
            <input type="text" class="form-control" name="tanggalpulang" id="tanggalpulang" placeholder="Tanggalpulang" value="<?php echo $tanggalpulang; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenisperjalanan <?php echo form_error('jenisperjalanan') ?></label>
            <input type="text" class="form-control" name="jenisperjalanan" id="jenisperjalanan" placeholder="Jenisperjalanan" value="<?php echo $jenisperjalanan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Jumlahtiket <?php echo form_error('jumlahtiket') ?></label>
            <input type="text" class="form-control" name="jumlahtiket" id="jumlahtiket" placeholder="Jumlahtiket" value="<?php echo $jumlahtiket; ?>" />
        </div>
	    <div class="form-group">
            <label for="bigint">Supir1 <?php echo form_error('supir1') ?></label>
            <input type="text" class="form-control" name="supir1" id="supir1" placeholder="Supir1" value="<?php echo $supir1; ?>" />
        </div>
	    <div class="form-group">
            <label for="bigint">Supir2 <?php echo form_error('supir2') ?></label>
            <input type="text" class="form-control" name="supir2" id="supir2" placeholder="Supir2" value="<?php echo $supir2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Supir3 <?php echo form_error('supir3') ?></label>
            <input type="text" class="form-control" name="supir3" id="supir3" placeholder="Supir3" value="<?php echo $supir3; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Createdat <?php echo form_error('createdat') ?></label>
            <input type="text" class="form-control" name="createdat" id="createdat" placeholder="Createdat" value="<?php echo $createdat; ?>" />
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
	    <a href="<?php echo site_url('jadwal') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>