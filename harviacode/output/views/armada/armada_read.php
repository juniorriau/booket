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
        <h2 style="margin-top:0px">Armada Read</h2>
        <table class="table">
	    <tr><td>Guuid</td><td><?php echo $guuid; ?></td></tr>
	    <tr><td>Jenisarmada</td><td><?php echo $jenisarmada; ?></td></tr>
	    <tr><td>Kodehuruf</td><td><?php echo $kodehuruf; ?></td></tr>
	    <tr><td>Kodeangka</td><td><?php echo $kodeangka; ?></td></tr>
	    <tr><td>Platnomor</td><td><?php echo $platnomor; ?></td></tr>
	    <tr><td>Kelas</td><td><?php echo $kelas; ?></td></tr>
	    <tr><td>Kapasitas</td><td><?php echo $kapasitas; ?></td></tr>
	    <tr><td>Fasilitas</td><td><?php echo $fasilitas; ?></td></tr>
	    <tr><td>Perusahaan</td><td><?php echo $perusahaan; ?></td></tr>
	    <tr><td>Createdat</td><td><?php echo $createdat; ?></td></tr>
	    <tr><td>Createdby</td><td><?php echo $createdby; ?></td></tr>
	    <tr><td>Updatedat</td><td><?php echo $updatedat; ?></td></tr>
	    <tr><td>Updatedby</td><td><?php echo $updatedby; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('armada') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>