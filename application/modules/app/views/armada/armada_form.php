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
        <h2 style="margin-top:0px">Armada <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Guuid <?php echo form_error('guuid') ?></label>
            <input type="text" class="form-control" name="guuid" id="guuid" placeholder="Guuid" value="<?php echo $guuid; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Jenisarmada <?php echo form_error('jenisarmada') ?></label>
            <input type="text" class="form-control" name="jenisarmada" id="jenisarmada" placeholder="Jenisarmada" value="<?php echo $jenisarmada; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kodehuruf <?php echo form_error('kodehuruf') ?></label>
            <input type="text" class="form-control" name="kodehuruf" id="kodehuruf" placeholder="Kodehuruf" value="<?php echo $kodehuruf; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kodeangka <?php echo form_error('kodeangka') ?></label>
            <input type="text" class="form-control" name="kodeangka" id="kodeangka" placeholder="Kodeangka" value="<?php echo $kodeangka; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Platnomor <?php echo form_error('platnomor') ?></label>
            <input type="text" class="form-control" name="platnomor" id="platnomor" placeholder="Platnomor" value="<?php echo $platnomor; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kelas <?php echo form_error('kelas') ?></label>
            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="<?php echo $kelas; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kapasitas <?php echo form_error('kapasitas') ?></label>
            <input type="text" class="form-control" name="kapasitas" id="kapasitas" placeholder="Kapasitas" value="<?php echo $kapasitas; ?>" />
        </div>
	    <div class="form-group">
            <label for="fasilitas">Fasilitas <?php echo form_error('fasilitas') ?></label>
            <textarea class="form-control" rows="3" name="fasilitas" id="fasilitas" placeholder="Fasilitas"><?php echo $fasilitas; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="int">Perusahaan <?php echo form_error('perusahaan') ?></label>
            <input type="text" class="form-control" name="perusahaan" id="perusahaan" placeholder="Perusahaan" value="<?php echo $perusahaan; ?>" />
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
	    <a href="<?php echo site_url('armada') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>