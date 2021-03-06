<div class="page-title">                    
    <h2><span class="fa fa-plus-square"></span> Add New Bank</h2>
</div>

<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-sm btn-default btn-flat" href="<?php echo base_url('admin/bank/adm'); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp;All Bank</a>
                </div>
                <div class="panel-body">
                    <?php
                    if (!empty($msg)) {
                        echo $msg;
                    }
                    ?>

                    <?php echo form_open(uri_string(), 'class="form-horizontal"'); ?>
                    <div class="form-group">
                        <label for="bank_name" class="col-sm-2 control-label">Nama Bank</label>
                        <div class="col-sm-5">
                            <?php echo form_dropdown('bank_name', $bank_data, '0', $bank_name); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bank_rek_no" class="col-sm-2 control-label">No. Rekening</label>
                        <div class="col-sm-5">
                            <?php echo form_input($bank_rek_no); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bank_rek_acc" class="col-sm-2 control-label">Pemilik Rekening</label>
                        <div class="col-sm-5">
                            <?php echo form_input($bank_rek_acc); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bank_rek_branch" class="col-sm-2 control-label">Cabang</label>
                        <div class="col-sm-5">
                            <?php echo form_input($bank_rek_branch); ?>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Create</button>
                    <a class="btn btn-sm btn-flat btn-warning" style="margin-left: 5px;" href="<?php echo base_url('admin/bank/adm'); ?>"><i class="fa fa-rotate-left"></i> Batal</a>
                </div> <!--/.box-footer-->
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ajaxModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalTitle"></h4>
            </div>
            <div class="modal-body" id="modalContent">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm btn-simple" onclick="return closeModal()">Save</button>
            </div>
        </div>
    </div>
</div>