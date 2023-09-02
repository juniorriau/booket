
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <title><?php echo $this->config->item('site_name') . " | " . $this->config->item('site_description') ?></title>
        <link rel="shortcut icon" href="<?php echo site_url($this->config->item('site_icon')) ?>">
        <link rel="stylesheet" href="<?php echo site_url() ?>assets/web/css/plugins.css">
        <link rel="stylesheet" href="<?php echo site_url() ?>assets/web/css/style.css">
        <link rel="stylesheet" href="<?php echo site_url() ?>assets/web/css/colors/aqua.css">
        <link rel="preload" href="<?php echo site_url() ?>assets/web/css/fonts/dm.css" as="style" onload="this.rel = 'stylesheet'">
        <?php
        if (isset($extracss)) {
            $this->load->view($extracss);
        }
        ?>
    </head>

    <body>