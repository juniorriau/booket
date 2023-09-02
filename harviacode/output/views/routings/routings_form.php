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
        <h2 style="margin-top:0px">Routings <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Routename <?php echo form_error('routename') ?></label>
            <input type="text" class="form-control" name="routename" id="routename" placeholder="Routename" value="<?php echo $routename; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Routeurl <?php echo form_error('routeurl') ?></label>
            <input type="text" class="form-control" name="routeurl" id="routeurl" placeholder="Routeurl" value="<?php echo $routeurl; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Routealias <?php echo form_error('routealias') ?></label>
            <input type="text" class="form-control" name="routealias" id="routealias" placeholder="Routealias" value="<?php echo $routealias; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Icon <?php echo form_error('icon') ?></label>
            <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon" value="<?php echo $icon; ?>" />
        </div>
	    <div class="form-group">
            <label for="functionname">Functionname <?php echo form_error('functionname') ?></label>
            <textarea class="form-control" rows="3" name="functionname" id="functionname" placeholder="Functionname"><?php echo $functionname; ?></textarea>
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
	    <a href="<?php echo site_url('routings') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>