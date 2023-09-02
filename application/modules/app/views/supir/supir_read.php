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
        <h2 style="margin-top:0px">Supir Read</h2>
        <table class="table">
	    <tr><td>Guuid</td><td><?php echo $guuid; ?></td></tr>
	    <tr><td>Perusahaan</td><td><?php echo $perusahaan; ?></td></tr>
	    <tr><td>Namalengkap</td><td><?php echo $namalengkap; ?></td></tr>
	    <tr><td>Tanggallahir</td><td><?php echo $tanggallahir; ?></td></tr>
	    <tr><td>Jeniskelamin</td><td><?php echo $jeniskelamin; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Nomortelepon</td><td><?php echo $nomortelepon; ?></td></tr>
	    <tr><td>Posisi</td><td><?php echo $posisi; ?></td></tr>
	    <tr><td>Nomorsim</td><td><?php echo $nomorsim; ?></td></tr>
	    <tr><td>Jenissim</td><td><?php echo $jenissim; ?></td></tr>
	    <tr><td>Createdat</td><td><?php echo $createdat; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Createdby</td><td><?php echo $createdby; ?></td></tr>
	    <tr><td>Updatedat</td><td><?php echo $updatedat; ?></td></tr>
	    <tr><td>Updatedby</td><td><?php echo $updatedby; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('supir') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>