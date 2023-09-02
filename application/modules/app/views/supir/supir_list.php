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
        <h2 style="margin-top:0px">Supir List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('supir/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('supir/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('supir'); ?>" class="btn btn-default">Reset</a>
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
		<th>Perusahaan</th>
		<th>Namalengkap</th>
		<th>Tanggallahir</th>
		<th>Jeniskelamin</th>
		<th>Alamat</th>
		<th>Nomortelepon</th>
		<th>Posisi</th>
		<th>Nomorsim</th>
		<th>Jenissim</th>
		<th>Createdat</th>
		<th>Status</th>
		<th>Createdby</th>
		<th>Updatedat</th>
		<th>Updatedby</th>
		<th>Action</th>
            </tr><?php
            foreach ($supir_data as $supir)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $supir->guuid ?></td>
			<td><?php echo $supir->perusahaan ?></td>
			<td><?php echo $supir->namalengkap ?></td>
			<td><?php echo $supir->tanggallahir ?></td>
			<td><?php echo $supir->jeniskelamin ?></td>
			<td><?php echo $supir->alamat ?></td>
			<td><?php echo $supir->nomortelepon ?></td>
			<td><?php echo $supir->posisi ?></td>
			<td><?php echo $supir->nomorsim ?></td>
			<td><?php echo $supir->jenissim ?></td>
			<td><?php echo $supir->createdat ?></td>
			<td><?php echo $supir->status ?></td>
			<td><?php echo $supir->createdby ?></td>
			<td><?php echo $supir->updatedat ?></td>
			<td><?php echo $supir->updatedby ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('supir/read/'.$supir->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('supir/update/'.$supir->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('supir/delete/'.$supir->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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