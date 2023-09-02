<!-- page title -->

<header id="page-header">

    <h1>Beranda</h1>
</header>

<div id="content" class="dashboard padding-20">
    <?php if ($this->session->userdata('message') <> '') { ?>
        <div class="alert alert-info  text-center" role="alert">
            <strong><?php echo $this->session->userdata('message') ?>.</strong>
        </div>

    <?php } if ($session['rolename'] == "Administrator" || $session['rolename'] == "Verifikator") { ?>
        <!-- BOXES -->
        <div class="row">
            <!-- Feedback Box -->
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <!-- BOX -->
                <div class="box danger"><!-- default, danger, warning, info, success -->
                    <div class="box-title"><!-- add .noborder class if box-body is removed -->
                        <h4><a href="#"><?php echo $totalpeserta ?> </a></h4>
                        <small class="block">Peserta Terdaftar</small>
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="box-body text-center">
                        <span class="sparkline" data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
                            331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
                        </span>
                    </div>
                </div>
                <!-- /BOX -->
            </div>
            <!-- Profit Box -->
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <!-- BOX -->
                <div class="box warning"><!-- default, danger, warning, info, success -->
                    <div class="box-title"><!-- add .noborder class if box-body is removed -->
                        <h4><?php echo $nonverifpeserta ?></h4>
                        <small class="block">Peserta Belum Terverifikasi</small>
                        <i class="fa fa-user-times"></i>
                    </div>
                    <div class="box-body text-center">
                        <span class="sparkline" data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
                            331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
                        </span>
                    </div>
                </div>
                <!-- /BOX -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <!-- BOX -->
                <div class="box info"><!-- default, danger, warning, info, success -->
                    <div class="box-title"><!-- add .noborder class if box-body is removed -->
                        <h4><?php echo $tobeverifpeserta ?></h4>
                        <small class="block">Peserta Perlu Diverifikasi</small>
                        <i class="fa fa-user-secret"></i>
                    </div>
                    <div class="box-body text-center">
                        <span class="sparkline" data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
                            331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
                        </span>
                    </div>
                </div>
                <!-- /BOX -->
            </div>
            <!-- Online Box -->
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <!-- BOX -->
                <div class="box success"><!-- default, danger, warning, info, success -->
                    <div class="box-title"><!-- add .noborder class if box-body is removed -->
                        <h4><?php echo $verifpeserta ?></h4>
                        <small class="block">Peserta Sudah Terverifikasi</small>
                        <i class="fa fa-user-check"></i>
                    </div>
                    <div class="box-body text-center">
                        <span class="sparkline" data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
                            331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
                        </span>
                    </div>
                </div>
                <!-- /BOX -->
            </div>
        </div>
        <!-- /BOXES -->
        <?php
    }

    if ($session['rolename'] == "Students") {
        ?>
        <div id="content" class="padding-20">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            Tahapan Perserta
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="breadcrumb-step">
                        <?php
                        if (!empty($tahapMhs)) {
                            for ($i = 0; $i < count($tahap); $i++) {
                                if ($i < $tahapMhs->tahap) {
                                    echo "<li class='completed'><a >" . $tahap[$i] . "</a></li>";
                                } elseif ($i == $tahapMhs->tahap) {
                                    echo "<li class='active'><a >" . $tahap[$i] . "</a></li>";
                                } else {
                                    echo "<li class=''><a >" . $tahap[$i] . "</a></li>";
                                }
                            }
                        }
                        ?>
                    </ul>
                    <div>
                        <?php
                        if ($tahapMhs->status == 2 || $tahapMhs->status == 4) {
                            echo '<div class="alert alert-warning col-sm-12">';
                            echo $statusmessages[$tahapMhs->status] . " dengan keterangan : " . $arrKeterangan[$tahapMhs->keterangan];
                            echo '</div>';
                        } else {
                            echo '<div class="alert alert-info col-sm-12">';
                            echo $statusmessages[$tahapMhs->status] . " " . $tahapmessages[$tahapMhs->tahap];
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            Informasi Tanggal Penting
                        </div>
                    </div>
                </div>
                <div class="panel-body">


                    <p>Tanggal Pendaftaran &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo date_format(date_create($this->config->item('tanggal_daftar')), "Y-m-d"); ?></p>
                    <p>Tanggal Maks Submit Berkas : <?php echo date_format(date_create($this->config->item('tanggal_submit')), "Y-m-d"); ?></p>
                    <p>Tanggal Ujian CAT : <?php echo date_format(date_create($this->config->item('tanggal_ujiancat')), "Y-m-d"); ?></p>
                    <p>Tanggal Wawancara : <?php echo date_format(date_create($this->config->item('tanggal_wawancara')), "Y-m-d"); ?></p>
                    <p>Tanggal Pengumuman : <?php echo date_format(date_create($this->config->item('tanggal_pengumuman')), "Y-m-d"); ?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

