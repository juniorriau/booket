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
        <h2 style="margin-top:0px">Routings Read</h2>
        <table class="table">
	    <tr><td>Routename</td><td><?php echo $routename; ?></td></tr>
	    <tr><td>Routeurl</td><td><?php echo $routeurl; ?></td></tr>
	    <tr><td>Routealias</td><td><?php echo $routealias; ?></td></tr>
	    <tr><td>Icon</td><td><?php echo $icon; ?></td></tr>
	    <tr><td>Functionname</td><td><?php echo $functionname; ?></td></tr>
	    <tr><td>Createdat</td><td><?php echo $createdat; ?></td></tr>
	    <tr><td>Createdby</td><td><?php echo $createdby; ?></td></tr>
	    <tr><td>Updatedat</td><td><?php echo $updatedat; ?></td></tr>
	    <tr><td>Updatedby</td><td><?php echo $updatedby; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('routings') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>