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
        <h2 style="margin-top:0px">Jadwal List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('jadwal/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('jadwal/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('jadwal'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Guuid</th>
		<th>Kodejadwal</th>
		<th>Armada</th>
		<th>Perusahaan</th>
		<th>Tanggalberangkat</th>
		<th>Tanggalpulang</th>
		<th>Jenisperjalanan</th>
		<th>Jumlahtiket</th>
		<th>Supir1</th>
		<th>Supir2</th>
		<th>Supir3</th>
		<th>Createdat</th>
		<th>Createdby</th>
		<th>Updatedat</th>
		<th>Updatedby</th>
		<th>Action</th>
            </tr><?php
            foreach ($jadwal_data as $jadwal)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $jadwal->guuid ?></td>
			<td><?php echo $jadwal->kodejadwal ?></td>
			<td><?php echo $jadwal->armada ?></td>
			<td><?php echo $jadwal->perusahaan ?></td>
			<td><?php echo $jadwal->tanggalberangkat ?></td>
			<td><?php echo $jadwal->tanggalpulang ?></td>
			<td><?php echo $jadwal->jenisperjalanan ?></td>
			<td><?php echo $jadwal->jumlahtiket ?></td>
			<td><?php echo $jadwal->supir1 ?></td>
			<td><?php echo $jadwal->supir2 ?></td>
			<td><?php echo $jadwal->supir3 ?></td>
			<td><?php echo $jadwal->createdat ?></td>
			<td><?php echo $jadwal->createdby ?></td>
			<td><?php echo $jadwal->updatedat ?></td>
			<td><?php echo $jadwal->updatedby ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('jadwal/read/'.$jadwal->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('jadwal/update/'.$jadwal->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('jadwal/delete/'.$jadwal->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>