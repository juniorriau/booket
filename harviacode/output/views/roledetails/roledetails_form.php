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
        <h2 style="margin-top:0px">Roledetails <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Roleid <?php echo form_error('roleid') ?></label>
            <input type="text" class="form-control" name="roleid" id="roleid" placeholder="Roleid" value="<?php echo $roleid; ?>" />
        </div>
	    <div class="form-group">
            <label for="roledetail">Roledetail <?php echo form_error('roledetail') ?></label>
            <textarea class="form-control" rows="3" name="roledetail" id="roledetail" placeholder="Roledetail"><?php echo $roledetail; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="navigation">Navigation <?php echo form_error('navigation') ?></label>
            <textarea class="form-control" rows="3" name="navigation" id="navigation" placeholder="Navigation"><?php echo $navigation; ?></textarea>
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
	    <a href="<?php echo site_url('roledetails') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>