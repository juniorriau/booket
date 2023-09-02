<?php $this->load->view('base/header') ?>
<div class="content-wrapper">
    <?php $this->load->view('base/nav') ?>
    <section class="wrapper bg-light">
        <?php echo $this->load->view($template); ?>
        <!--/.container-->
    </section>
    <!--/section-->
</div>
<!--/.content-wrapper-->
<?php
$this->load->view('base/footer');
