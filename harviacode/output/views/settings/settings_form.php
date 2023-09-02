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
        <h2 style="margin-top:0px">Settings <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Setting Name <?php echo form_error('setting_name') ?></label>
            <input type="text" class="form-control" name="setting_name" id="setting_name" placeholder="Setting Name" value="<?php echo $setting_name; ?>" />
        </div>
	    <div class="form-group">
            <label for="setting_value">Setting Value <?php echo form_error('setting_value') ?></label>
            <textarea class="form-control" rows="3" name="setting_value" id="setting_value" placeholder="Setting Value"><?php echo $setting_value; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('settings') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>