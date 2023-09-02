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
        <h2 style="margin-top:0px">Userdetails List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('userdetails/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('userdetails/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('userdetails'); ?>" class="btn btn-default">Reset</a>
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
		<th>Userid</th>
		<th>Fullname</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Url</th>
		<th>Image</th>
		<th>Description</th>
		<th>Createdat</th>
		<th>Createdby</th>
		<th>Updatedat</th>
		<th>Updatedby</th>
		<th>Action</th>
            </tr><?php
            foreach ($userdetails_data as $userdetails)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $userdetails->userid ?></td>
			<td><?php echo $userdetails->fullname ?></td>
			<td><?php echo $userdetails->address ?></td>
			<td><?php echo $userdetails->phone ?></td>
			<td><?php echo $userdetails->url ?></td>
			<td><?php echo $userdetails->image ?></td>
			<td><?php echo $userdetails->description ?></td>
			<td><?php echo $userdetails->createdat ?></td>
			<td><?php echo $userdetails->createdby ?></td>
			<td><?php echo $userdetails->updatedat ?></td>
			<td><?php echo $userdetails->updatedby ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('userdetails/read/'.$userdetails->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('userdetails/update/'.$userdetails->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('userdetails/delete/'.$userdetails->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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