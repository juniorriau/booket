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
        <h2 style="margin-top:0px">Rute Read</h2>
        <table class="table">
	    <tr><td>Guuid</td><td><?php echo $guuid; ?></td></tr>
	    <tr><td>Koderute</td><td><?php echo $koderute; ?></td></tr>
	    <tr><td>Kotaasal</td><td><?php echo $kotaasal; ?></td></tr>
	    <tr><td>Kotatujuan</td><td><?php echo $kotatujuan; ?></td></tr>
	    <tr><td>Perusahaan</td><td><?php echo $perusahaan; ?></td></tr>
	    <tr><td>Createdat</td><td><?php echo $createdat; ?></td></tr>
	    <tr><td>Createdby</td><td><?php echo $createdby; ?></td></tr>
	    <tr><td>Updatedat</td><td><?php echo $updatedat; ?></td></tr>
	    <tr><td>Updatedby</td><td><?php echo $updatedby; ?></td></tr>
	    <tr><td>Armada</td><td><?php echo $armada; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('rute') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>