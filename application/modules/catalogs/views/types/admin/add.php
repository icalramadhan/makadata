<div class="page-title">                    
    <h2><span class="fa fa-plus-square"></span> Add New Product Type</h2>
</div>

<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-sm btn-default btn-flat" href="<?php echo base_url('admin/catalogs'); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp;Catalogs</a>
                    <a class="btn btn-sm btn-default btn-flat" href="<?php echo base_url('admin/catalogs/types'); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp;Types&nbsp;&nbsp;&nbsp;</a>
                </div>
                <div class="panel-body">
                    <?php
                    if (!empty($msg)) {
                        echo $msg;
                    }
                    ?>
                    <?php echo form_open(uri_string()); ?>
                    <div class="form-group">
                        <label for="type_name" class="control-label">Type Name</label>
                        <?php echo form_input($type_name); ?>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Create</button>
                    <a class="btn btn-sm btn-flat btn-warning" style="margin-left: 5px;" href="<?php echo base_url('admin/catalogs/types'); ?>"><i class="fa fa-rotate-left"></i> Batal</a>
                </div> <!--/.box-footer-->
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>