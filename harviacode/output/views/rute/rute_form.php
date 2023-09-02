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
        <h2 style="margin-top:0px">Rute <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Guuid <?php echo form_error('guuid') ?></label>
            <input type="text" class="form-control" name="guuid" id="guuid" placeholder="Guuid" value="<?php echo $guuid; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Koderute <?php echo form_error('koderute') ?></label>
            <input type="text" class="form-control" name="koderute" id="koderute" placeholder="Koderute" value="<?php echo $koderute; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kotaasal <?php echo form_error('kotaasal') ?></label>
            <input type="text" class="form-control" name="kotaasal" id="kotaasal" placeholder="Kotaasal" value="<?php echo $kotaasal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kotatujuan <?php echo form_error('kotatujuan') ?></label>
            <input type="text" class="form-control" name="kotatujuan" id="kotatujuan" placeholder="Kotatujuan" value="<?php echo $kotatujuan; ?>" />
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
	    <div class="form-group">
            <label for="bigint">Armada <?php echo form_error('armada') ?></label>
            <input type="text" class="form-control" name="armada" id="armada" placeholder="Armada" value="<?php echo $armada; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('rute') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>