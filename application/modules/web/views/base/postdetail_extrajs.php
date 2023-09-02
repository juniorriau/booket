<script type="text/javascript" src="<?php echo base_url() ?>assets/app/plugins/jquery/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
    function postlike(id) {
        $.ajax({
            type: "GET",
            url: "<?php echo site_url("web/posts/like/") ?>" + id,
            dataType: 'JSON',
            async: false,
            success: function (data) {
                if (data.status === "success") {
                    $("#likecounter").html(data.like + "<span> Likes</span>");
                }
            },
            error: function (error) {
                console.log("cannot send like");
            }
        });

    }
</script>
