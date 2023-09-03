<!-- page title -->
<header id="page-header">
    <h1>
        <?php echo ucfirst($this->uri->segment(2)) ?>
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url($this->uri->segment(1)) ?>">Beranda</a></li>
        <li class="breadcrumb-item active">
            <?php echo ucfirst($this->uri->segment(2)) ?>
        </li>
    </ol>
</header>
<!-- /page title -->


<div id="content" class="padding-20">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-md-12">
                    <?php
                    if (in_array('create', $rolelist)) {
                        echo $this->myacl->_btnCreate(site_url('app/fasilitas/create'), "Tambah");
                    }
                    ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-right">
                    <form action="<?php echo site_url('app/fasilitas/index'); ?>" class="form-inline" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                            <span class="input-group-btn">
                                <?php
                                if ($q <> '') {
                                    ?>
                                    <a href="<?php echo site_url('app/fasilitas'); ?>" class="btn btn-sm btn-warning">Atur
                                        Ulang</a>
                                    <?php
                                }
                                ?>
                                <button class="btn btn-sm btn-red" type="submit">Cari</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel-body">

            <div class="table table-responsive">
                <table class="table table-bordered" style="margin-bottom: 10px">
                    <tr>
                        <th>No</th>
                        <th>Fasilitas</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    foreach ($fasilitas_data as $fasilitas) {
                        ?>
                        <tr>
                            <td width="80px">
                                <?php echo ++$start ?>
                            </td>
                            <td>
                                <?php echo $fasilitas->fasilitas ?>
                            </td>
                            <td style="text-align:center" width="250px">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-teal dropdown-toggle" data-toggle="dropdown">Pilih
                                        Aksi <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <?php
                                        if (in_array('update', $rolelist)) {
                                            echo "<li>" . $this->myacl->_btnUpdate(site_url('app/fasilitas/update/' . $fasilitas->id)) . "</li>";
                                        }

                                        if (in_array('delete', $rolelist)) {
                                            echo "<li>" . $this->myacl->_btnDelete(site_url('app/fasilitas/delete/' . $fasilitas->id)) . "</li>";
                                        }
                                        ?>
                                    </ul>
                                </div>
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
                    <a href="#" class="btn btn-primary">Jumlah Data :
                        <?php echo $total_rows ?>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <?php echo $pagination ?>
                </div>
            </div>
        </div>
    </div>
</div>