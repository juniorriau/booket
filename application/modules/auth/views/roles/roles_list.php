
<!-- page title -->
<header id="page-header">
    <h1><?php echo ucfirst($this->uri->segment(2)) ?></h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url("/app") ?>">Home</a></li>
        <li class="breadcrumb-item active"><?php echo ucfirst($this->uri->segment(2)) ?></li>
    </ol>
</header>
<!-- /page title -->


<div id="content" class="padding-20">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <?php echo anchor(site_url('auth/roles/create'), 'Create', 'class="btn btn-sm btn-red"'); ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-right">
                    <form action="<?php echo site_url('auth/roles/index'); ?>" class="form-inline" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                            <span class="input-group-btn">
                                <?php
                                if ($q <> '') {
                                    ?>
                                    <a href="<?php echo site_url('auth/roles'); ?>" class="btn btn-sm btn-warning">Reset</a>
                                    <?php
                                }
                                ?>
                                <button class="btn btn-sm btn-red" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel-body">

            <div class="table table-responsive">
                <table class="table table-striped mb-0" >
                    <tr>
                        <th>No</th>
                        <th>Rolename</th>
                        <th>Rolelist</th>
                        <th>CreatedAt</th>
                        <th>UpdatedAt</th>
                        <th>Action</th>
                    </tr><?php
                    foreach ($roles_data as $roles) {
                        ?>
                        <tr>
                            <td width="80px"><?php echo ++$start ?></td>
                            <td><?php echo $roles->rolename ?></td>
                            <td><?php echo $roles->rolename ?></td>
                            <td><?php echo $roles->createdat ?></td>
                            <td><?php echo $roles->updatedat ?></td>
                            <td>
                                <?php
                                echo anchor(site_url('auth/roles/reload_session_action/'), 'Reload Session', 'class="btn btn-sm btn-aqua"');
                                echo anchor(site_url('auth/roles/roledetail/' . $roles->id), 'Role Lists', 'class="btn btn-sm btn-success"');
                                echo anchor(site_url('auth/roles/update/' . $roles->id), 'Update', 'class="btn btn-sm btn-info"');
                                echo anchor(site_url('auth/roles/delete/' . $roles->id), 'Delete', 'class="btn btn-sm btn-warning" onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>

        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <?php echo $pagination ?>
                </div>
            </div>
        </div>
    </div>
</div>