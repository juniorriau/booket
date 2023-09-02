<!-- page title -->
<header id="page-header">
    <h1><?php echo ucfirst($this->uri->segment(2)) ?></h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url($this->uri->segment(1)) ?>">Home</a></li>
        <li class="breadcrumb-item "><a href="<?php echo base_url($this->uri->segment(1) . "/" . $this->uri->segment(2)) ?>"><?php echo ucfirst($this->uri->segment(2)) ?></a></li>
        <li class="breadcrumb-item active"><?php echo ucfirst($this->uri->segment(3)) ?></li>
    </ol>
</header>
<!-- /page title -->


<div id="content" class="padding-20">
    <form method="post" action="<?php echo $action ?>" autocomplete="off">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-lg-12"><?php echo ucfirst($this->uri->segment(2) . ' ' . $this->uri->segment(3)) ?></div>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="varchar">Rolename <?php echo form_error('rolename') ?></label>
                    <input type="text" class="form-control" name="rolename" id="rolename" placeholder="Rolename" value="<?php echo $rolename; ?>" readonly=""/>
                </div>
                <div class="form-group">
                    <label for="varchar">Role lists <button type="button" class="btn btn-success" id="checkall" >Tick All</button> <button type="button" class="btn btn-danger" id="uncheckall" >Untick All</button></label>
                    <table class="table table-responsive">
                        <?php
                        if (!empty($roledetails)) {
                            $classRoute = json_decode($roledetails->roledetail, true);
                        } else {
                            $classRoute = array();
                        }
                        foreach ($routings as $r) {
                            ?>
                            <tr>
                                <td><?php echo ucfirst($r->routename) ?> </td>
                                <td>
                                    <?php
                                    if (!empty($r->functionname)) {
                                        foreach (json_decode($r->functionname)as $f => $v) {

                                            if (array_key_exists($r->routename, $classRoute)) {
                                                ?>
                                                <input type="checkbox" id="<?php echo $r->routename ?>" name="<?php echo $r->routename ?>[]"
                                                <?php echo in_array($v, $classRoute[$r->routename]) ? 'checked' : '' ?>
                                                       value="<?php echo $v ?>"> <?php echo $v ?>
                                                       <?php
                                                   } else {
                                                       ?>
                                                <input type="checkbox" id="<?php echo $r->routename ?>" name="<?php echo $r->routename ?>[]" value="<?php echo $v ?>"> <?php echo $v ?>
                                                <?php
                                            }
                                        }
                                    } else {
                                        ?>
                                        <span class="alert alert-warning">Function not generate yet!</span>
                                    <?php }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                            <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                            <a href="<?php echo site_url('auth/roles') ?>" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>