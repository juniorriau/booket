

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<!-- JAVASCRIPT FILES -->

<script type="text/javascript" src="<?php echo base_url() ?>assets/app/plugins/jquery/jquery-2.2.3.min.js"></script>
<script type="text/javascript">var plugin_path = '<?php echo base_url() ?>assets/app/plugins/';</script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/app/js/app.js"></script>

<?php
if (isset($extrajs) && !empty($extrajs)) {
    $this->load->view($extrajs);
}
?>
</body>
</html>