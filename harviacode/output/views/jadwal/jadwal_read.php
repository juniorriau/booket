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
        <h2 style="margin-top:0px">Jadwal Read</h2>
        <table class="table">
	    <tr><td>Guuid</td><td><?php echo $guuid; ?></td></tr>
	    <tr><td>Kodejadwal</td><td><?php echo $kodejadwal; ?></td></tr>
	    <tr><td>Armada</td><td><?php echo $armada; ?></td></tr>
	    <tr><td>Perusahaan</td><td><?php echo $perusahaan; ?></td></tr>
	    <tr><td>Tanggalberangkat</td><td><?php echo $tanggalberangkat; ?></td></tr>
	    <tr><td>Tanggalpulang</td><td><?php echo $tanggalpulang; ?></td></tr>
	    <tr><td>Jenisperjalanan</td><td><?php echo $jenisperjalanan; ?></td></tr>
	    <tr><td>Jumlahtiket</td><td><?php echo $jumlahtiket; ?></td></tr>
	    <tr><td>Supir1</td><td><?php echo $supir1; ?></td></tr>
	    <tr><td>Supir2</td><td><?php echo $supir2; ?></td></tr>
	    <tr><td>Supir3</td><td><?php echo $supir3; ?></td></tr>
	    <tr><td>Createdat</td><td><?php echo $createdat; ?></td></tr>
	    <tr><td>Createdby</td><td><?php echo $createdby; ?></td></tr>
	    <tr><td>Updatedat</td><td><?php echo $updatedat; ?></td></tr>
	    <tr><td>Updatedby</td><td><?php echo $updatedby; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jadwal') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>