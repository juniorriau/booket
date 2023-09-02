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
        <h2 style="margin-top:0px">Settings Read</h2>
        <table class="table">
	    <tr><td>Setting Name</td><td><?php echo $setting_name; ?></td></tr>
	    <tr><td>Setting Value</td><td><?php echo $setting_value; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('settings') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>